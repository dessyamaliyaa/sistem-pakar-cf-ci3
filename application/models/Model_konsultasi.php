<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_konsultasi extends CI_Model {

    public $table ="tb_konsultasi";
    public $table2 ="tb_detail_konsultasi";
    
    public function get_data() { 
        $this->db->select('*');
        $this->db->from('tb_konsultasi');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function get_gejala()
    {
        $this->db->select('*');
        $this->db->from('gejala');
        return $this->db->get();
    }

    public function get_no_urut()
    {
        $this->db->select('id_konsultasi');
        $this->db->from('tb_konsultasi');
        $this->db->order_by('id_konsultasi','DESC');
        return $this->db->get()->first_row();
    }

    public function save($data) {
        return $this->db->insert($this->table,$data);
    }
    
    
    public function get_details($id){
        $sql = " SELECT * FROM `tb_detail_konsultasi` a 
                LEFT JOIN `tb_konsultasi` b ON a.`id_konsultasi` = b.`id_konsultasi` 
                LEFT JOIN `tb_gejala` c ON a.`id_gejala` = c.`id_gejala` 
                WHERE a.`id_konsultasi` = '".$id."' 
                ORDER BY a.`id_detail_konsultasi` ASC 
        ";
        return $this->db->query($sql);
    }

    public function get_detail($id) { 
        $this->db->select('*');
        $this->db->from('tb_konsultasi', 'tb_gejala', 'tb_detail_konsultasi');
        $this->db->join('tb_detail_konsultasi','tb_konsultasi.id_konsultasi = tb_detail_konsultasi.id_konsultasi');
        $this->db->join('tb_gejala','tb_detail_konsultasi.id_gejala = tb_gejala.id_gejala');
        $this->db->where('tb_konsultasi.id_konsultasi',$id);
        $query = $this->db->get(); 
        return $query->result();
    }

    public function get_baris($id){
        $sql = " SELECT * FROM `tb_konsultasi` AS a 
                WHERE a.`id_konsultasi` = '".$id."' 
                LIMIT 1
        ";
        return $this->db->query($sql);
    }

    public function savedetail($data) {
       return $this->db->insert($this->table2,$data);
    }
}    