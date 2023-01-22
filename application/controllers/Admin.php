<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin extends CI_Controller {
 
    public function __construct(){
        parent ::__construct(); 
        $this->load->model('Model_admin');
    }

    public function index(){  
        $this->Model_login->getSecurity();
        $data = array(
            'read'      =>  $this->Model_admin->get_data(),
            'level'     =>  $this->session->userdata('level'),
            'content'   =>  'admin',
        );
        $this->load->view('back/index',$data);
    }

    public function tambah() {
        $this->Model_login->getSecurity();
        $this->load->model('Model_admin');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Create',
        );
        if (isset($_POST['simpan'])) {
            $nama = $this->input->post('nama', TRUE);
            $username = $this->input->post('username', TRUE);
            $sql_nama = $this->db->query("SELECT nama FROM tb_admin where nama='$nama'");
            $cek_nama = $sql_nama->num_rows();
            $sql_uname = $this->db->query("SELECT username FROM tb_admin where username='$username'");
            $cek_uname = $sql_uname->num_rows();
            if($cek_nama || $cek_uname > 0){
                $this->session->set_flashdata('gagal', 'Gagal!');
                redirect('admin');
            }else{
                $this->Model_admin->save();
                $this->session->set_flashdata('info', 'Berhasil!');
                $this->session->set_flashdata('type', 'success');
                redirect('admin');                
            }   
            $this->Model_admin->save();
            $this->session->set_flashdata('info', 'Berhasil!');
            $this->session->set_flashdata('type', 'success');
            redirect('admin');        
        }else {
            $data = array(
            'read'      =>  $this->Model_admin->get_data(),
            'level'     =>  $this->session->userdata('level'),
            'content'   =>  'form tambah admin',
            );
            $this->load->view('back/index',$data);
        }
    }

    public function ubah(){
        $this->Model_login->getSecurity();
        $nama = $this->input->post('nama', TRUE);
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $sql_nama = $this->db->query("SELECT nama FROM tb_admin where nama='$nama'");
        $cek_nama = $sql_nama->num_rows();
        $sql_uname = $this->db->query("SELECT username FROM tb_admin where username='$username'");
        $cek_uname = $sql_uname->num_rows();
        if(isset($_POST['simpan'])){
            if($cek_nama || $cek_uname > 0){
                $this->session->set_flashdata('gagal', 'Gagal!');
                redirect('admin');                
            }else{
                $pass = $this->input->post('password');            
                if (empty($pass)) {
                $data = array(
                    'nama'     => $this->input->post('nama'),
                    'username'  => $this->input->post('username'),
                );
                }else{
                    $data = array(
                        'nama' => $this->input->post('nama'),
                        'username'  => $this->input->post('username'),
                        'password'  => password_hash($pass, PASSWORD_DEFAULT)
                    );
                }
                $id      = $this->uri->segment(3);
                $this->Model_admin->update($data, $id);
                $this->session->set_flashdata('info', 'Berhasil!');
                $this->session->set_flashdata('type', 'success');
                redirect('admin');
            }
        }else{
            $id_admin        = $this->uri->segment(3);
            $data['admin']   = $this->db->get_where('tb_admin',array('id_admin'=>$id_admin))->row_array();
            $data['content']  = 'form ubah admin';
            $data['level']    = $this->session->userdata('level');
            $this->load->view('back/index',$data);
        }
    }

    public function hapus($id){
        $this->Model_login->getSecurity();
        $sql_gejala = $this->db->query("SELECT id_gejala FROM tb_gejala where id_penginput='$id'");
        $cek_gejala = $sql_gejala->num_rows();
        $sql_penyakit = $this->db->query("SELECT id_penyakit FROM tb_penyakit where id_penginput='$id'");
        $cek_penyakit = $sql_penyakit->num_rows();
        if($cek_gejala || $cek_penyakit > 0){
            $this->session->set_flashdata('gagal', 'Gagal!');
            redirect('admin');        
        }else{
            $this->Model_admin->delete($id);
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
            $this->session->set_flashdata('type', 'success');
            redirect('admin');
        }
    }
}