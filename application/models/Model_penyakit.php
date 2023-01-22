<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_penyakit extends CI_Model {

    public $table ="tb_penyakit";

    public function get_data() { 
        $this->db->select('*');
        $this->db->from('tb_penyakit');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function save() {
        date_default_timezone_set("Asia/Jakarta");
        $inptanggal = date('Y-m-d');
        $level = $this->session->userdata('level');
        if($level == "admin"){
            $penginput = $this->session->userdata('id_admin');
        }else if($level == "pakar"){
            $penginput = $this->session->userdata('id_pakar');
        } 
            $nama_penyakit  = $this->input->post('nama_penyakit'); 
            $keterangan     = $this->input->post('keterangan'); 
            $data = array(
                'nama_penyakit'     => $this->input->post('nama_penyakit', TRUE),
                'keterangan'        => $this->input->post('keterangan', FALSE),
                'id_penginput'        => $penginput,
                'level_penginput'        => $level,
                'date'        => $inptanggal
            );        
        $this->db->insert($this->table,$data);
    }
    
    
    public function update($id) { 
        date_default_timezone_set("Asia/Jakarta");
        $inptanggal = date('Y-m-d');
        $level = $this->session->userdata('level');
        if($level == "admin"){
            $penginput = $this->session->userdata('id_admin');
        }else if($level == "pakar"){
            $penginput = $this->session->userdata('id_pakar');
        }
        $data = array(
            'nama_penyakit'     => $this->input->post('nama_penyakit', TRUE),
            'keterangan'        => $this->input->post('keterangan', TRUE),
            'id_penginput'        => $penginput,
            'level_penginput'        => $level,
            'date'        => $inptanggal

        );
        $this->db->where('id_penyakit',$id);
        $this->db->update($this->table,$data);
    }

    function delete($id){
        $this->db->where('id_penyakit', $id);
        return $this->db->delete('tb_penyakit');
    }
}    