<?php
class Model_login extends CI_Model{
    
    public function getSecurity() {
		$level    = $this->session->userdata('level'); 
        if (empty($level)) {
    		$this->session->set_flashdata("info", "<i class=\"ace-icon fa fa-exclamation-circle red\"></i>Masukkan Nama Pengguna dan Kata Sandi Anda!"); 
    		redirect('home/login');                   
        	$this->session->sess_destroy(); 
        }  
    }
    
    public function admin($username){
        $this->db->where('username', $username);
        return $this->db->get('tb_admin');
    }

    public function pakar($username){
        $this->db->where('username', $username);
        return $this->db->get('tb_pakar');
    }
}
