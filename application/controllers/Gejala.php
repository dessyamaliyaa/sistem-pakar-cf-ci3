<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Gejala extends CI_Controller {
 
    public function __construct(){
        parent ::__construct(); 
        $this->load->model('Model_gejala');
    }

    public function index(){  
        $this->Model_login->getSecurity();
        $data = array(
            'read'      =>  $this->Model_gejala->get_data(),
            'level'     =>  $this->session->userdata('level'),
            //'cek_admin'    => $this->Model_gejala->cek_admin(), // num rows admin
            //'cek_pakar'    => $this->Model_gejala->cek_pakar(), // num rows pakar
            //'admin'    => $this->Model_gejala->gejala_admin(), // ambil semua data admin
            //'pakar'    => $this->Model_gejala->gejala_pakar(), // ambil semua data pakar
            'content'   =>  'gejala',
        );
        $this->load->view('back/index',$data);
    }

    public function tambah() {
        $this->Model_login->getSecurity();
        $this->load->model('Model_gejala');
        $this->load->helper('form_helper');
        $data = array(
            'button' => 'Create',
        );
        if (isset($_POST['simpan'])) {            
            $nama_gejala = $this->input->post('nama_gejala', TRUE);
            $sql_nama = $this->db->query("SELECT nama_gejala FROM tb_gejala where nama_gejala='$nama_gejala'");
            $cek_nama = $sql_nama->num_rows();
            
                if ($cek_nama > 0) {
                    $this->session->set_flashdata('gagal', 'Gagal!');
                    redirect('gejala');
                }else{
                    $this->Model_gejala->save();
                    $this->session->set_flashdata('info', 'Berhasil!');
                    $this->session->set_flashdata('type', 'success');
                    redirect('gejala');
                }    
        } else {
            $data = array(
                'read'      =>  $this->Model_gejala->get_data(),
                'level'     =>  $this->session->userdata('level'),
                'content'   =>  'form tambah gejala',
            );
            $this->load->view('back/index',$data);
        }

    }

    public function ubah(){
        $this->Model_login->getSecurity();
        if(isset($_POST['simpan'])){
            $nama_gejala = $this->input->post('nama_gejala', TRUE);
            $sql_nama = $this->db->query("SELECT nama_gejala FROM tb_gejala where nama_gejala='$nama_gejala'");
            $cek_nama = $sql_nama->num_rows();
            $id      = $this->uri->segment(3);
            if ($cek_nama > 0) {
                $this->session->set_flashdata('gagal', 'Gagal!');
                redirect('gejala');
            }else{
                $this->Model_gejala->update($id);
                $this->session->set_flashdata('info', 'Berhasil!');
                $this->session->set_flashdata('type', 'success');
                redirect('gejala');
            }
        }else{
            $id_gejala        = $this->uri->segment(3);
            $data['gejala']   = $this->db->get_where('tb_gejala',array('id_gejala'=>$id_gejala))->row_array();
            $data['content']  = 'form ubah gejala';
            $data['level']    = $this->session->userdata('level');
            $this->load->view('back/index',$data);
        }
    }

    public function hapus($id){
        $sql = $this->db->query("SELECT id_gejala FROM tb_gabungan where id_gejala='$id'");
        $cek = $sql->num_rows();
        if($cek > 0){
            $this->session->set_flashdata('gagal', 'Gagal!');
            redirect('gejala');
        }else{
            $this->Model_gejala->delete($id);
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
            $this->session->set_flashdata('type', 'success');
            redirect('gejala');
        }
    }
}