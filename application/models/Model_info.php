<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_info extends CI_Model {

    public $table ="tb_info";

    
    public function get_data() { 
        $this->db->select('*');
        $this->db->from('tb_info');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function info_admin() { 
        $this->db->select('*');
        $this->db->from('tb_info');
        $this->db->join('tb_admin','tb_admin.id_admin = tb_info.author');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function info_pakar() { 
        $this->db->select('*');
        $this->db->from('tb_info');
        $this->db->join('tb_pakar','tb_pakar.id_pakar = tb_info.author');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function detail_admin($id) { 
        $this->db->select('*');
        $this->db->from('tb_penyakit');
        $this->db->where('id_penyakit',$id);
        $this->db->join('tb_admin','tb_admin.id_admin = tb_penyakit.id_penginput');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function detail_pakar($id) { 
        $this->db->select('*');
        $this->db->from('tb_penyakit');
        $this->db->where('id_penyakit',$id);
        $this->db->join('tb_pakar','tb_pakar.id_pakar = tb_penyakit.id_penginput');
        $query = $this->db->get(); 
        return $query->result();
    }


    public function cek_pakar() { 
        $this->db->select('*');
        $this->db->from('tb_info');
        $this->db->join('tb_pakar','tb_pakar.id_pakar = tb_info.author');
        $query = $this->db->get(); 
        return $query->num_rows();
    }

    public function cek_admin() { 
        $this->db->select('*');
        $this->db->from('tb_info');
        $this->db->join('tb_admin','tb_admin.id_admin = tb_info.author');
        $query = $this->db->get(); 
        return $query->num_rows();
    }

    public function cek_detailpakar($id) { 
        $this->db->select('*');
        $this->db->from('tb_penyakit');
        $this->db->where('id_penyakit',$id);
        $this->db->join('tb_pakar','tb_pakar.id_pakar = tb_penyakit.id_penginput');
        $query = $this->db->get(); 
        return $query->num_rows();
    }

    public function cek_detailadmin($id) { 
        $this->db->select('*');
        $this->db->from('tb_penyakit');
        $this->db->where('id_penyakit',$id);
        $this->db->join('tb_admin','tb_admin.id_admin = tb_penyakit.id_penginput');
        $query = $this->db->get(); 
        return $query->num_rows();
    }

    public function update($id) {
        date_default_timezone_set("Asia/Jakarta");
        $inptanggal = date('Y-m-d');
        $level = $this->session->userdata('level');
        if($level == "admin"){
            $id_author = $this->session->userdata('id_admin');
        }elseif($level == "pakar"){
            $id_author = $this->session->userdata('id_pakar');
        }
        $data = array(
            'info_content'    => $this->input->post('info_content', TRUE),
            'author'    => $id_author,
            'date'    => $inptanggal
        );   
        $this->db->where('id_info',$id);
        $this->db->update($this->table,$data);
    }

    public function get_data_id($id) { 
        $sql = "select id_info,info_content from tb_info where id_info in (".$id.")";
         return $this->db->query($sql);
    }
}
    