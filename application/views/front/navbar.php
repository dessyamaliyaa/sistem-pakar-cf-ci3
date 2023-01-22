<!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="<?= base_url('home') ?>">SP<span class="color-b">ISPA</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="<?php if($content == "home") { ?> nav-link active <?php } else { ?> nav-link <?php }?>" href="<?= base_url('home') ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="<?php if($content == "info") { ?> nav-link active <?php } else if($content == "detail_info"){ ?> nav-link active <?php } else {?> nav-link <?php } ?>" href="<?php echo base_url('/home/info');?>" >Informasi ISPA Anak</a>
          </li>
          <li class="nav-item">
            <a class="<?php if($content == "konsultasi" || $content == "hasil konsultasi") { ?> nav-link active <?php } else { ?> nav-link <?php }?>" href="<?= base_url('/home/konsultasi') ?>" href="<?= base_url('konsultasi') ?>">Konsultasi</a>
          </li>
          <li class="nav-item">
            <a class="<?php if($content == "login") { ?> nav-link active <?php } else { ?> nav-link <?php }?>" href="<?= base_url('home/login') ?>" href="<?= base_url('home/login') ?>">Masuk</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->