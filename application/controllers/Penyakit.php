<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Penyakit extends CI_Controller {
 
    public function __construct(){
        parent ::__construct(); 
        $this->load->model('Model_penyakit');

    }

    public function index(){  
        $this->Model_login->getSecurity();
        $data = array(
            'read'          =>  $this->Model_penyakit->get_data(),
            'level'         =>  $this->session->userdata('level'),
            'content'       =>  'penyakit',
        );
        $this->load->view('back/index',$data);
    }

    public function tambah() {
        $this->Model_login->getSecurity();
        $this->load->model('Model_penyakit');
        $data = array(
            'button' => 'Create',
        );
        if (isset($_POST['simpan'])) {            
            $nama_penyakit = $this->input->post('nama_penyakit', TRUE);
            $keterangan = $this->input->post('keterangan', TRUE);
            $sql_nama = $this->db->query("SELECT nama_penyakit FROM tb_penyakit where nama_penyakit='$nama_penyakit'");
            $cek_nama = $sql_nama->num_rows();
            $sql_ket = $this->db->query("SELECT keterangan FROM tb_penyakit where keterangan='$keterangan'");
            $cek_ket = $sql_ket->num_rows();
            if($cek_nama || $cek_ket > 0){
                $this->session->set_flashdata('gagal', 'Gagal!');
                redirect('penyakit');                
            }else{
                $this->Model_penyakit->save();
                $this->session->set_flashdata('info', 'Berhasil!');
                $this->session->set_flashdata('type', 'success');
                redirect('penyakit');
            }
        } else {
            $data = array(
            'read'      =>  $this->Model_penyakit->get_data(),
            'level'     =>  $this->session->userdata('level'),
            'content'   =>  'form tambah penyakit',
            );
            $this->load->view('back/index',$data);
        }
    }

    public function ubah(){
        $this->Model_login->getSecurity();
        if(isset($_POST['simpan'])){            
            $nama_penyakit = $this->input->post('nama_penyakit', TRUE);
            $keterangan = $this->input->post('keterangan', TRUE);
            $sql_nama = $this->db->query("SELECT nama_penyakit FROM tb_penyakit where nama_penyakit='$nama_penyakit'");
            $cek_nama = $sql_nama->num_rows();            
            if($cek_nama){
                $this->session->set_flashdata('gagal', 'Gagal!');
                redirect('penyakit');                
            }else{
                $id      = $this->uri->segment(3);
                $this->Model_penyakit->update($id);
                $this->session->set_flashdata('info', 'Berhasil!');
                $this->session->set_flashdata('type', 'success');
                redirect('penyakit');
            }
        }else{
            $id_penyakit      = $this->uri->segment(3);
            $data['penyakit'] = $this->db->get_where('tb_penyakit',array('id_penyakit'=>$id_penyakit))->row_array();
            $data['content']  = 'form ubah penyakit';
            $data['level']    = $this->session->userdata('level');
            $this->load->view('back/index',$data);
        }
    }

    public function hapus($id){
        $sql = $this->db->query("SELECT id_penyakit FROM tb_gabungan where id_penyakit='$id'");
        $cek = $sql->num_rows();
        if($cek > 0){
            $this->session->set_flashdata('gagal', 'Gagal!');
            redirect('penyakit');
        }else{
            $this->Model_login->getSecurity();
            $this->Model_penyakit->delete($id);
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
            redirect('penyakit');
        }
    }
}