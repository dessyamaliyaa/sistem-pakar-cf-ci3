<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Info extends CI_Controller {
 
    public function __construct(){
        parent ::__construct(); 
        $this->load->model('Model_info');
    }

    public function index(){  
        $this->Model_login->getSecurity();  
        $data = array(
            'read'      =>  $this->Model_info->get_data(),
            'level'     =>  $this->session->userdata('level'),
            'content'   =>  'informasi',
        );
        $this->load->view('back/index',$data);
    }

    public function ubah(){
        $this->Model_login->getSecurity();
        if(isset($_POST['simpan'])){
            
            $id      = $this->uri->segment(3);
            $this->Model_info->update($id);
            $this->session->set_flashdata('info', 'Berhasil!');
            $this->session->set_flashdata('type', 'success');
            redirect('info');
        }else{
            $id_info        = $this->uri->segment(3);
            $data['info']   = $this->db->get_where('tb_info',array('id_info'=>$id_info))->row_array();
            $data['content']  = 'form ubah info';
            $data['level']    = $this->session->userdata('level');
            $this->load->view('back/index',$data);
        }
    }
}