<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pakar extends CI_Controller {
 
    public function __construct(){
        parent ::__construct(); 
        $this->load->model('Model_pakar');
    }

    public function index(){  
        $this->Model_login->getSecurity();
        $data = array(
            'read'      =>  $this->Model_pakar->get_data(),
            'level'     =>  $this->session->userdata('level'),
            'content'   =>  'pakar',
        );
        $this->load->view('back/index',$data);
    }

    public function tambah() {
        $this->Model_login->getSecurity();
        $this->load->model('Model_pakar');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Create',
        );
        if (isset($_POST['simpan'])) {
            $nama = $this->input->post('nama', TRUE);
            $sip_pakar = $this->input->post('sip_pakar', TRUE);
            $telp_pakar = $this->input->post('telp_pakar', TRUE);
            $username = $this->input->post('username', TRUE);

            $sql_nama = $this->db->query("SELECT nama FROM tb_pakar where nama='$nama'");
            $cek_nama = $sql_nama->num_rows();
            $sql_uname = $this->db->query("SELECT username FROM tb_pakar where username='$username'");
            $cek_uname = $sql_uname->num_rows();
            $sql_sip = $this->db->query("SELECT sip_pakar FROM tb_pakar where sip_pakar='$sip_pakar'");
            $cek_sip = $sql_sip->num_rows();
            $sql_telp = $this->db->query("SELECT telp_pakar FROM tb_pakar where telp_pakar='$telp_pakar'");
            $cek_telp = $sql_telp->num_rows();

            if($cek_nama || $cek_uname || $cek_sip || $cek_telp > 0){
                $this->session->set_flashdata('gagal', 'Gagal!');
                redirect('pakar');
            }else{
                $this->Model_pakar->save();
                $this->session->set_flashdata('info', 'Berhasil!');
                $this->session->set_flashdata('type', 'success');
                redirect('pakar');
            }
        } else {
            $data = array(
            'read'      =>  $this->Model_pakar->get_data(),
            'level'     =>  $this->session->userdata('level'),
            'content'   =>  'form tambah pakar',
            );
            $this->load->view('back/index',$data);
        }
    }

    public function ubah(){
        $this->Model_login->getSecurity();
        if(isset($_POST['simpan'])){
            $pass = $this->input->post('password');

            $nama = $this->input->post('nama', TRUE);
            $sip_pakar = $this->input->post('sip_pakar', TRUE);
            $telp_pakar = $this->input->post('telp_pakar', TRUE);
            $username = $this->input->post('username', TRUE);

            $sql_nama = $this->db->query("SELECT nama FROM tb_pakar where nama='$nama'");
            $cek_nama = $sql_nama->num_rows();
            $sql_uname = $this->db->query("SELECT username FROM tb_pakar where username='$username'");
            $cek_uname = $sql_uname->num_rows();
            $sql_sip = $this->db->query("SELECT sip_pakar FROM tb_pakar where sip_pakar='$sip_pakar'");
            $cek_sip = $sql_sip->num_rows();
            $sql_telp = $this->db->query("SELECT telp_pakar FROM tb_pakar where telp_pakar='$telp_pakar'");
            $cek_telp = $sql_telp->num_rows();

            if($cek_nama || $cek_uname || $cek_sip || $cek_telp > 0){
                $this->session->set_flashdata('gagal', 'Gagal!');
                redirect('pakar');
            }else{
                if (empty($pass)) {
                $data = array(
                    'nama_pakar'     => $this->input->post('nama'),
                    'username'  => $this->input->post('username'),
                    'sip_pakar'  => $this->input->post('sip_pakar'),
                    'telp_pakar'  => $this->input->post('telp_pakar')
                );
                }else{
                    $data = array(
                        'nama_pakar' => $this->input->post('nama'),
                        'username'  => $this->input->post('username'),
                        'sip_pakar'  => $this->input->post('sip_pakar'),
                        'telp_pakar'  => $this->input->post('telp_pakar'),
                        'password'  => password_hash($pass, PASSWORD_DEFAULT)
                    );
                }
                $id      = $this->uri->segment(3);
                $this->Model_pakar->update($data, $id);
                $this->session->set_flashdata('info', 'Berhasil!');
                $this->session->set_flashdata('type', 'success');
                redirect('pakar');                
            }
        }else{
            $id_pakar        = $this->uri->segment(3);
            $data['pakar']   = $this->db->get_where('tb_pakar',array('id_pakar'=>$id_pakar))->row_array();
            $data['content']  = 'form ubah pakar';
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
        if($cek_penyakit || $cek_gejala > 0){
            $this->session->set_flashdata('gagal', 'Gagal!');
            redirect('pakar');                    
        }else{
            $this->Model_pakar->delete($id);
            $this->session->set_flashdata('info', 'Berhasil!');
            $this->session->set_flashdata('type', 'success');
            redirect('pakar');
        }        
    }
}