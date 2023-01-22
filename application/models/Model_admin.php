<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

    public $table ="tb_admin";

    
    public function get_data() { 
        $this->db->select('*');
        $this->db->from('tb_admin');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function save() {
        $password = $this->input->post('password'); 
        $data = array(
            'nama'   => $this->input->post('nama', TRUE),
            'username'     => $this->input->post('username', TRUE),
            'password'     => password_hash($password, PASSWORD_DEFAULT),
            'level'        => "admin",
        );
        $this->db->insert($this->table,$data);
    }

    public function update($data,$id) {
        $this->db->where('id_admin',$id);
        $this->db->update($this->table,$data);
    }

    function delete($id){
        $this->db->where('id_admin', $id);
        return $this->db->delete('tb_admin');
    }
    
}
    