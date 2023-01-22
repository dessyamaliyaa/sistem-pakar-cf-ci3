<?php 
	if ($content == "home") {
   	$this->load->view('front/home');    
  }elseif($content == "login"){
    $this->load->view('front/login');
  } elseif($content == "info"){
    $this->load->view('front/informasi'); 
  }elseif($content == "konsultasi"){
    $this->load->view('front/konsultasi'); 
  }elseif($content == "detail_info"){
    $this->load->view('front/detail_info'); 
  }elseif($content == "hasil konsultasi"){
    $this->load->view('front/hasil_kons'); 
  }elseif($content == "tentang"){
    $this->load->view('front/tentang'); 
  }
?>