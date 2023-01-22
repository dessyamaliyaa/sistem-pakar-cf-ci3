<?php

function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun
 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

?>  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"><?php echo $detail_info['nama_penyakit']; ?></h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?= base_url('home') ?>">Beranda</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Informasi ISPA Anak
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
  <!--/ News Single Star /-->
  <section class="news-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="title-box-d">
                      <h3 class="title-d">Jenis ISPA</h3>
                    </div>
          <ul class="list-unstyled">
                    <?php $no=1; foreach ($penyakit as $data2) { ?>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="<?= site_url('home/detail_info/'.$data2->id_penyakit)?>"><?= $data2->nama_penyakit ?><br><br></a>
                    </li>
                    <?php } ?>
            </ul>
        </div>
        <div class="col-md-8">          
            <ul class="list-inline color-a">
              <li class="list-inline-item mr-2">
                <?php $no=1; if($cek_admin>0){foreach ($admin as $data2) { ?>
                <strong>Ditulis Oleh : </strong>
                <span class="color-text-a"><?= $data2->nama;?></span>
              </li>
              <li class="list-inline-item">
                <strong>Tanggal: </strong> <?php $date = new DateTime ?>
                <span class="color-text-a"><?= tgl_indo($data2->date);?></span>
              <?php } }else if($cek_pakar>0){ foreach ($pakar as $data2) {?>
                <strong>Ditulis Oleh : </strong>
                <span class="color-text-a"><?= $data2->nama_pakar;?></span>
              </li>
              <li class="list-inline-item">
                <strong>Pada Tanggal: </strong>
                <span class="color-text-a"><?= tgl_indo($data2->date);?></span>
              <?php }} ?>
              </li>
            </ul>
          <div class="post-content color-text-a">      
            <p>
              <br><?php echo $detail_info['keterangan']; ?>
            </p>  
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--/ News Single End /-->