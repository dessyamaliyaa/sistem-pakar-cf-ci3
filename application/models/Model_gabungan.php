<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_gabungan extends CI_Model {

    public $table ="tb_gabungan";

    
    public function loadgejala() {
        return $this->db->get('tb_gejala')->result();
    }

    public function loadpenyakit() {
        return $this->db->get('tb_penyakit')->result();
    }

    public function get_data() { 
        $this->db->select('*');
        $this->db->from('tb_gabungan', 'tb_gejala', 'tb_penyakit', 'tb_pakar');
        $this->db->join('tb_gejala','tb_gabungan.id_gejala = tb_gejala.id_gejala');
        $this->db->join('tb_penyakit','tb_gabungan.id_penyakit = tb_penyakit.id_penyakit');
        $this->db->join('tb_pakar','tb_gabungan.id_penginput = tb_pakar.id_pakar');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function get_data_id($id) { 
        $sql = "SELECT * FROM `tb_gabungan` AS a 
                LEFT JOIN `tb_gejala` AS b ON a.`id_gejala` = b.`id_gejala` 
                LEFT JOIN `tb_penyakit` AS c ON a.`id_penyakit` = c.`id_penyakit` 
                WHERE 
                a.`id_gabungan` = '".$id."' 
                    LIMIT 1
        ";
        return $this->db->query($sql);
    }

    public function save() {
        $level = $this->session->userdata('level');
        $penginput = $this->session->userdata('id_pakar'); 
        $id_gejala      = $this->input->post('id_gejala'); 
        $id_penyakit    = $this->input->post('id_penyakit');
        $nilai_mb       = $this->input->post('nilai_mb');
        $nilai_md       = $this->input->post('nilai_md');
        $data = array(
            'id_gejala'     => $this->input->post('id_gejala', TRUE),
            'id_penyakit'   => $this->input->post('id_penyakit', TRUE),
            'nilai_md'      => $this->input->post('nilai_md', TRUE),
            'nilai_mb'      => $this->input->post('nilai_mb', TRUE),
            'id_penginput'      => $penginput,
            'level_penginput'      => $level,
        );
        $this->db->insert($this->table,$data);
    }

    public function update($id) {
        $level = $this->session->userdata('level');
        $penginput = $this->session->userdata('id_pakar'); 
        $data = array(
            'id_gejala'      => $this->input->post('id_gejala', TRUE),
            'id_penyakit'    => $this->input->post('id_penyakit', TRUE),
            'nilai_mb'       => $this->input->post('nilai_mb', TRUE),
            'nilai_md'       => $this->input->post('nilai_md', TRUE),
            'id_penginput'      => $penginput,
            'level_penginput'      => $level,
        );   
        $this->db->where('id_gabungan',$id);
        $this->db->update($this->table,$data);
    }

    function delete($id){
        $this->db->where('id_gabungan', $id);
        return $this->db->delete('tb_gabungan');
    }

    function get_by_gejala($gejala){
         $sql = "select distinct p.id_penyakit,
         p.kode_penyakit,
         p.nama_penyakit,
         p.keterangan
         from tb_gabungan 
         gp inner join tb_penyakit p 
         on gp.id_penyakit=p.id_penyakit 
         where id_gejala in (".$gejala.") 
         order by p.id_penyakit ,id_gejala";
         return $this->db->query($sql);
     }

     function get_gejala_by_penyakit($id,$gejala=null){
         $sql = "select tb_gabungan.id_gejala,         
         nilai_mb,
         nilai_md 
         from tb_gabungan 
         where id_penyakit=".$id;
         if($gejala!=null)
            $sql=$sql." and id_gejala in (".$gejala.")";
        $sql=$sql." order by id_gejala";
         return $this->db->query($sql);
     }
}    