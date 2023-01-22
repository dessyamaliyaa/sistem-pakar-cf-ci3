<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pakar extends CI_Model {

    public $table ="tb_pakar";

    public function get_data() { 
        $this->db->select('*');
        $this->db->from('tb_pakar','tb_admin');
        $this->db->join('tb_admin','tb_pakar.id_admin = tb_admin.id_admin');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function save() {
        $password     = $this->input->post('password');
        $id_admin = $this->session->userdata('id_admin'); 
        $data = array(
            'nama_pakar'    => $this->input->post('nama', TRUE),
            'sip_pakar'     => $this->input->post('sip_pakar', TRUE),
            'telp_pakar'    => $this->input->post('telp_pakar', TRUE),
            'username'      => $this->input->post('username', TRUE),
            'password'      => password_hash($password, PASSWORD_DEFAULT),
            'level'         => "pakar",
            'id_admin'         => $id_admin,
        );
        $this->db->insert($this->table,$data);
    }

    public function update($data,$id) {
        $this->db->where('id_pakar',$id);
        $this->db->update($this->table,$data);
    }

    function delete($id){
        $this->db->where('id_pakar', $id);
        return $this->db->delete('tb_pakar');
    }
}    