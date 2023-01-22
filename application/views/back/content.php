<?php 
  if ($content == "informasi"){
      $this->load->view('back/informasi/list');    
    }elseif($content == "konsultasi"){
      $this->load->view('back/konsultasi/list'); 
    }elseif($content == "admin"){
      $this->load->view('back/admin/list'); 
    } elseif($content == "gejala"){
      $this->load->view('back/gejala/list'); 
    }elseif($content == "penyakit"){
      $this->load->view('back/penyakit/list'); 
    }elseif($content == "gabungan"){
      $this->load->view('back/gabungan/list'); 
    }elseif($content == "pakar"){
      $this->load->view('back/pakar/list'); 
    }elseif($content == "konsultasi"){
      $this->load->view('back/konsultasi/list');
    }elseif($content == "detail kons"){
      $this->load->view('back/konsultasi/detail'); 

    }elseif($content == "form tambah pakar"){
      $this->load->view('back/pakar/add'); 
    }elseif($content == "form tambah admin"){
      $this->load->view('back/admin/add'); 
    }elseif($content == "form tambah gejala"){
      $this->load->view('back/gejala/add'); 
    }elseif($content == "form tambah penyakit"){
      $this->load->view('back/penyakit/add'); 
    }elseif($content == "form tambah gabungan"){
      $this->load->view('back/gabungan/add');

    }elseif($content == "form ubah gejala"){
      $this->load->view('back/gejala/edit'); 
    }elseif($content == "form ubah penyakit"){
      $this->load->view('back/penyakit/edit');      
    }elseif($content == "form ubah gabungan"){
      $this->load->view('back/gabungan/edit'); 
    }elseif($content == "form ubah info"){
      $this->load->view('back/informasi/edit');
    }elseif($content == "form ubah admin"){
      $this->load->view('back/admin/edit');
    }elseif($content == "form ubah pakar"){
      $this->load->view('back/pakar/edit');
    }
    

    else{
      $this->load->view('back/dashboard'); 
    }
?>