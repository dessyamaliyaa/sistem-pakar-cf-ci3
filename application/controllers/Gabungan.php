<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Gabungan extends CI_Controller {
 
    public function __construct(){
        parent ::__construct(); 
        $this->load->model('Model_gabungan');
    }

    public function index(){  
        $this->Model_login->getSecurity();
        $data = array(
            'read'      =>  $this->Model_gabungan->get_data(),
            'level'     =>  $this->session->userdata('level'),
            'content'   =>  'gabungan',
        );
        $this->load->view('back/index',$data);
    } 

    public function tambah() {
        $this->Model_login->getSecurity();
        $this->load->model('Model_gabungan');
        $this->load->helper('form_helper');

        $id_gejala = $this->input->post('id_gejala', TRUE);
        $id_penyakit = $this->input->post('id_penyakit', TRUE);

        $sql_gejala = $this->db->query("SELECT id_gejala FROM tb_gabungan where id_gejala='$id_gejala'");
        $cek_gejala = $sql_gejala->num_rows();
        $sql_penyakit = $this->db->query("SELECT id_penyakit FROM tb_gabungan where id_penyakit='$id_penyakit'");
        $cek_penyakit = $sql_penyakit->num_rows();

        if($cek_gejala || $cek_penyakit > 0){
                $this->session->set_flashdata('gagal', 'Gagal!');
                redirect('gabungan');
        }else{
            $data = array(
            'button'    => 'Create',
            'gejala'    => $this->Model_gabungan->loadgejala(),
            'penyakit'  => $this->Model_gabungan->loadpenyakit(),
            'read'      =>  $this->Model_gabungan->get_data(),
            'level'     =>  $this->session->userdata('level'),
            'content'   =>  'form tambah gabungan',
            );
            if (isset($_POST['simpan'])) {
                $this->Model_gabungan->save();
                $this->session->set_flashdata('info', 'Berhasil!');
                $this->session->set_flashdata('type', 'success');
                redirect('gabungan');
            } else {
                $data = array(
                'button'    => 'Create',
                'gejala'    => $this->Model_gabungan->loadgejala(),
                'penyakit'  => $this->Model_gabungan->loadpenyakit(),
                'read'      =>  $this->Model_gabungan->get_data(),
                'level'     =>  $this->session->userdata('level'),
                'content'   =>  'form tambah gabungan',
                );
                $this->load->view('back/index',$data);
            }
        }        
    }

    public function ubah(){
        $this->Model_login->getSecurity();

        $id_gejala = $this->input->post('id_gejala', TRUE);
        $id_penyakit = $this->input->post('id_penyakit', TRUE);

        $sql_gejala = $this->db->query("SELECT id_gejala FROM tb_gabungan where id_gejala='$id_gejala'");
        $cek_gejala = $sql_gejala->num_rows();
        $sql_penyakit = $this->db->query("SELECT id_penyakit FROM tb_gabungan where id_penyakit='$id_penyakit'");
        $cek_penyakit = $sql_penyakit->num_rows();

        if($cek_gejala || $cek_penyakit > 0){
                $this->session->set_flashdata('gagal', 'Gagal!');
                redirect('gabungan');
        }else{
            if(isset($_POST['simpan'])){
                $id      = $this->uri->segment(3);
                $this->Model_gabungan->update($id);
                $this->session->set_flashdata('info', 'Berhasil!');
                $this->session->set_flashdata('type', 'success');
                redirect('gabungan');
            }else{
                $id                 = $this->uri->segment(3);
                $data['gabungan']   = $this->Model_gabungan->get_data_id($id)->row();
                $data['gejala']     = $this->Model_gabungan->loadgejala();
                $data['penyakit']   = $this->Model_gabungan->loadpenyakit();
                $data['content']    = 'form ubah gabungan';
                $data['level']      = $this->session->userdata('level');
                $this->load->view('back/index',$data);
            }
        }        
    }

    public function hapus($id){
        $this->Model_login->getSecurity();
        $this->Model_gabungan->delete($id);
        $this->session->set_flashdata('info', 'Data berhasil dihapus');
        redirect('gabungan');
    }

}