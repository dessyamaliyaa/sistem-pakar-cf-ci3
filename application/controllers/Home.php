<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Model_info');
        $this->load->model('Model_penyakit');
        $this->load->model('Model_gejala'); 
        $this->load->model('Model_gabungan'); 
        $this->load->model('Model_admin'); 
        $this->load->model('Model_konsultasi'); 
        $this->load->library('getdata');
    }

    public function index(){
        $data = array(
            'content'     => 'home',
        );
        $this->load->view('front/index',$data);
    }

    public function info(){
        $data = array(
            'content'     => 'info',
            'info'        => $this->Model_info->get_data(),
            'penyakit'    => $this->Model_penyakit->get_data(),
            'admin'    => $this->Model_info->info_admin(), // ambil semua data admin
            'pakar'    => $this->Model_info->info_pakar(), // ambil semua data pakar
            'cek_admin'    => $this->Model_info->cek_admin(), // num rows admin
            'cek_pakar'    => $this->Model_info->cek_pakar(), // num rows pakar
        );        
    $this->load->view('front/index',$data);
    }

    public function detail_info($id){        
        $data['content']     = 'detail_info';
        $data['penyakit'] = $this->Model_penyakit->get_data();
        $data['admin'] = $this->Model_info->detail_admin($id);
        $data['pakar'] = $this->Model_info->detail_pakar($id);
        $data['cek_admin'] = $this->Model_info->cek_detailadmin($id);
        $data['cek_pakar'] = $this->Model_info->cek_detailpakar($id);
        $data['detail_info'] = $this->db->get_where('tb_penyakit',array('id_penyakit'=>$id))->row_array();
        $this->load->view('front/index',$data);
    }

    public function tentang(){
        $data = array(
            'content'     => 'tentang',
        );
    $this->load->view('front/index',$data);
    }

    public function konsultasi(){                                  // 1
        if(!$this->input->post('gejala[]')){                        // 2
            $data = array(                                          // 3
             'content'          => 'konsultasi',
             'level'            =>  $this->session->userdata('level'),
             'listGejala'       =>  $this->getdata->_resultDB('tb_gejala'),
             'check'            =>  $this->getdata->_resultDB('tb_gejala','num_rows'),
            );
            $this->load->view('front/index',$data);
        }
        else{                                                       // 4
           $id_gejala = array();
           $nilai = array();
           $gejala = $this->input->post('gejala[]');
           $jumlah = 0;
           for ($i=0; $i < count($gejala) ; $i++) { 
              $x = explode("_", $gejala[$i]);
               if ($i<5) {
                $jumlah = $jumlah+floatval($x[1]);
                }
              array_push($nilai, $x[1]);
              array_push($id_gejala, $x[0]);
           }
           if ($jumlah ==0 ) {                                     // 5
               $data = array(                                       // 6
                    'content'          => 'konsultasi',
                     'listGejala'       =>  $this->getdata->_resultDB('tb_gejala'),
                     'check'            =>  $this->getdata->_resultDB('tb_gejala','num_rows'),
               );
               $this->session->set_flashdata('notif', 'MOHON MAAF! Kami tidak dapat mengambil keputusan atas pilihan anda. Berikan gejala yang lebih rinci untuk mendapatkan hasil yang maksimal.');
                $this->load->view('front/index',$data);
           }
           else{                                                    // 7
            //for ($i=0; $i < count($id_gejala); $i++) { 
            $MdGejala = array();
            foreach ($this->input->post('gejala') as $g) { // ambil input dari view kons
                $q = explode("_", $g);// ambil value + dipisah
                if ($q[1] > 0) { 
                    $MdGejala[$q[0]] = $q[1];
                }
            }
            $gejala = implode(', ',array_keys($MdGejala)); // dapat id gejala
            $data["listGejala"] = $this->Model_gejala->get_data_by_id($gejala); // dapat data gejala berdasarkan id
            $listPenyakit = $this->Model_gabungan->get_by_gejala($gejala);
            //hitung                
            //    $data["listGejala"] = $this->Model_gejala->get_data_by_id($id_gejala[$i]);
            //    $listPenyakit = $this->Model_gabungan->get_by_gejala($id_gejala[$i]);
                foreach ($listPenyakit->result() as $value) {
            //        $listGejala = $this->Model_gabungan->get_gejala_by_penyakit($value->id_penyakit, $id_gejala[$i]); // ambil mb md
                    $listGejala = $this->Model_gabungan->get_gejala_by_penyakit($value->id_penyakit, $gejala);
                    $cf = 0;
                    $cfOld = 0;
                    $cfCombine = 0;
                    $j = 0;
                    foreach ($listGejala->result() as $value2) {                    
                        $cf = $cf + (($value2->nilai_mb-$value2->nilai_md) * (1 - $cf));
                        $j++;
                    }
                    date_default_timezone_set("Asia/Jakarta");
                    $inptanggal = date('Y-m-d H:i:s');
                    $penyakit[] = array(      
                        'nilai_cf'          => $cf * 100,      
                        'nama_anak'         => $this->input->post('nama_anak', TRUE),
                        'usia_anak'         => $this->input->post('usia_anak', TRUE),
                        'alamat_anak'       => $this->input->post('alamat_anak', TRUE),
                        'time'              => $inptanggal,
                        'nama_penyakit'     => $value->nama_penyakit,
                        'keterangan'        => $value->keterangan,
                    );
                }
              $konsultasi = $this->Model_konsultasi->get_no_urut();
             $data_hasil = array();
                $cfTerbesar = $penyakit[0]['nilai_cf'];
                foreach ($penyakit as $p) {
                    if ($p['nilai_cf'] >= $cfTerbesar) {
                        $data_hasil = $p;
                        $cfTerbesar = $p['nilai_cf'];
                    }
                }
                if($cfTerbesar == "0"){                                 //8
                    $data = array(                                      // 9
                    'content'          => 'konsultasi',
                     'listGejala'       =>  $this->getdata->_resultDB('tb_gejala'),
                     'check'            =>  $this->getdata->_resultDB('tb_gejala','num_rows'),
                       );
                       $this->session->set_flashdata('notif', 'MOHON MAAF! PERHITUNGAN GAGAL! Kami tidak dapat mengambil keputusan atas pilihan anda. Berikan gejala yang lebih rinci untuk mendapatkan hasil yang maksimal.');
                        $this->load->view('front/index',$data);
                }
                else{                                                   // 10
                     if ($konsultasi==null) {
                        $id_konsultasi = 1;
                     }else{
                        $id_konsultasi = (int)$konsultasi->id_konsultasi+1;
                     }
                     $data_hasil['id_konsultasi'] = $id_konsultasi;             
                     if ($this->Model_konsultasi->save($data_hasil) > 0) {
                         for ($i=0; $i < count($id_gejala) ; $i++) { 
                            $datas = [
                                'id_konsultasi' => $id_konsultasi,
                                'id_gejala' => $id_gejala[$i],
                                'nilai' => $nilai[$i]
                            ];
                            $this->Model_konsultasi->savedetail($datas);
                         }
                        $data['dataHasil'] = $data_hasil;
                        $data['content']= 'hasil konsultasi';
                        $data["listPenyakit"] = $penyakit;
                        $this->load->view('front/index',$data);
                     }
                 }
           //}  
             }           
        } 
    }                                                               // 11

    public function cetak_kons(){
        $query   = $this->db->query("SELECT Max(tb_konsultasi.id_konsultasi) AS maxID FROM tb_konsultasi");
        foreach ($query->result() as $row) {
            $id = $row->maxID;
            $data['getdata'] = $this->Model_konsultasi->get_baris($id)->row();
            $this->load->view('front/cetak_kons',$data);
        }
    }

    public function login(){
        $data = array(
            'content'     => 'login',
        );
    $this->load->view('front/index',$data);
    }

    public function dashboard(){
        $data = array(
            'content'     => 'dashboard',
            'level'         =>  $this->session->userdata('level'),
        );
    $this->load->view('back/index',$data);
    }
}