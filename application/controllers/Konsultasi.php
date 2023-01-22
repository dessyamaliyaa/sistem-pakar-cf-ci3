<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller {    

    public function __construct(){
        parent::__construct();
        $this->load->model('Model_konsultasi');
        $this->load->helper('form');
        $this->load->library('getdata');
    }

    public function index(){  
        $this->Model_login->getSecurity();
        $data = array(
            'read'      =>  $this->Model_konsultasi->get_data(),
            'level'     =>  $this->session->userdata('level'),
            'content'   =>  'konsultasi',
        );
        $this->load->view('back/index',$data);
    }    

    public function detail(){
        $id             = $this->uri->segment(3);
        $data['data']   = $this->db->get_where('tb_konsultasi',array('id_konsultasi'=>$id))->row_array();
        $data['detail'] = $this->Model_konsultasi->get_detail($id);
        $data['content']= 'detail kons';
        $data['level']  = $this->session->userdata('level');
        $this->load->view('back/index',$data);
    }
}