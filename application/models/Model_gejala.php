<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_gejala extends CI_Model {

    public $table ="tb_gejala";
    
    public function get_data() { 
        $this->db->select('*');
        $this->db->from('tb_gejala');
        $query = $this->db->get(); 
        return $query->result();
    }    

    public function save() {
        $inptanggal = date('Y-m-d');
        $level = $this->session->userdata('level');
        if($level == "admin"){
            $penginput = $this->session->userdata('id_admin');
        }elseif($level == "pakar"){
            $penginput = $this->session->userdata('id_pakar');
        }
        $nama_gejala = $this->input->post('nama_gejala'); 
        $data = array(
            'nama_gejala'        => $this->input->post('nama_gejala', TRUE),
            'id_penginput'        => $penginput,
            'level_penginput'        => $level,
        );
        $this->db->insert($this->table,$data);
    }

    public function get_data_by_id($id){
        $sql = "select id_gejala,nama_gejala from tb_gejala where id_gejala in (".$id.")";
         return $this->db->query($sql);
    }

    public function gejala_admin() { 
        $this->db->select('nama');
        $this->db->from('tb_gejala');
        $this->db->join('tb_admin','tb_admin.id_admin = tb_gejala.penginput');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function gejala_pakar() { 
        $this->db->select('nama');
        $this->db->from('tb_gejala');
        $this->db->join('tb_pakar','tb_pakar.id_pakar = tb_gejala.penginput');
        $query = $this->db->get(); 
        return $query->result();
    }    

    public function cek_pakar() { 
        $this->db->select('nama');
        $this->db->from('tb_gejala');
        $this->db->join('tb_pakar','tb_pakar.id_pakar = tb_gejala.penginput');
        $query = $this->db->get(); 
        return $query->num_rows();
    }

    public function cek_admin() { 
        $this->db->select('nama');
        $this->db->from('tb_gejala');
        $this->db->join('tb_admin','tb_admin.id_admin = tb_gejala.penginput');
        $query = $this->db->get(); 
        return $query->num_rows();
    }
    
    public function update($id) {
        $inptanggal = date('Y-m-d');
        $level = $this->session->userdata('level');
        if($level == "admin"){
            $penginput = $this->session->userdata('id_admin');
        }elseif($level == "pakar"){
            $penginput = $this->session->userdata('id_pakar');
        }
        $data = array(
            'nama_gejala'       => $this->input->post('nama_gejala', TRUE),
            'id_penginput'       => $penginput,
            'level_penginput'       => $level
        );   
        $this->db->where('id_gejala',$id);
        $this->db->update($this->table,$data);
    }

    function delete($id){
        $this->db->where('id_gejala', $id);
        return $this->db->delete('tb_gejala');
    }
}    