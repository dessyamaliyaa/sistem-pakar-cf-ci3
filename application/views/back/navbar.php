<?php if ($level == 'admin') { ?>
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="<?php if($content == "dashboard") { ?> active <?php } else { ?> <?php }?>" ><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Beranda</a>
                        </li>
                        <li class="<?php if($content == "gejala" || $content == "penyakit" || $content == "gabungan" || $content == "pakar" || $content == "admin" || $content == "informasi" || $content == "form tambah gejala" || $content == "form ubah gejala" || $content == "form tambah penyakit" || $content == "form ubah penyakit" || $content == "form tambah admin" || $content == "form tambah pakar"|| $content == "form ubah profile" || $content == "form ubah info" || $content == "form ubah pakar" || $content == "form ubah admin" ) { ?> active <?php } else { ?> <?php }?>" ><a data-toggle="tab" href="#MasterData"><i class="notika-icon notika-app"></i> Data</a>
                        </li>
                        <li class="<?php if($content == "form password") { ?> active <?php } else { ?> <?php }?>" ><a data-toggle="tab" href="#Profile"><i class="notika-icon notika-menus"></i> Profile</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="<?php if($content == "dashboard") { ?> tab-pane active notika-tab-menu-bg animated flipInX <?php } else { ?> tab-pane  notika-tab-menu-bg animated flipInX <?php }?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('home/dashboard')?>">Beranda</a>
                                </li>
                            </ul>
                        </div>
                        <div id="MasterData" class="<?php if($content == "gejala" || $content == "penyakit" || $content == "gabungan" || $content == "pakar" || $content == "admin" || $content == "informasi" || $content == "form tambah gejala" || $content == "form ubah gejala" || $content == "form tambah penyakit" || $content == "form ubah penyakit" || $content == "form tambah admin" || $content == "form tambah pakar"|| $content == "form ubah profile" || $content == "form ubah info" || $content == "form ubah pakar" || $content == "form ubah admin" ) { ?> tab-pane active notika-tab-menu-bg animated flipInX <?php } else { ?> tab-pane notika-tab-menu-bg animated flipInX  <?php }?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('gejala')?>">Data Gejala</a>
                                </li>
                                <li><a href="<?= base_url('penyakit')?>">Data Penyakit</a>
                                </li>
                                <li><a href="<?= base_url('gabungan')?>">Data Gabungan</a>
                                </li>                                
                                <li><a href="<?= base_url('pakar')?>">Data Pakar</a>
                                </li>
                                <li><a href="<?= base_url('admin')?>">Data Admin</a>
                                </li>
                                <li><a href="<?= base_url('info')?>">Informasi ISPA</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Profile" class="<?php if($content == "form password") { ?> tab-pane active notika-tab-menu-bg animated flipInX <?php } else { ?> tab-pane  notika-tab-menu-bg animated flipInX <?php }?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('login/logout')?>">Keluar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
<?php }else if ($level == 'pakar') { ?>
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="<?php if($content == "dashboard") { ?> active <?php } else { ?> <?php }?>"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Beranda</a>
                        </li>
                        <li  class="<?php if($content == "gejala" || $content == "penyakit" || $content == "gabungan" || $content == "konsultasi" || $content == "pakar" || $content == "admin" || $content == "informasi" || $content == "form tambah gejala" || $content == "form ubah gejala" || $content == "form tambah penyakit" || $content == "form ubah penyakit" || $content == "form ubah profile" || $content == "form ubah info" || $content == "form tambah gabungan" || $content == "form ubah gabungan" || $content == "detail kons") { ?> active <?php } else { ?> <?php }?>"><a data-toggle="tab" href="#MasterData"><i class="notika-icon notika-app"></i> Data</a>
                        </li>
                        <li class="<?php if($content == "form password") { ?> active <?php } else { ?> <?php }?>" ><a data-toggle="tab" href="#Profile"><i class="notika-icon notika-menus"></i> Profile</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="<?php if($content == "dashboard") { ?> tab-pane active notika-tab-menu-bg animated flipInX <?php } else { ?> tab-pane  notika-tab-menu-bg animated flipInX <?php }?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('home/dashboard')?>">Beranda</a>
                                </li>
                            </ul>
                        </div>
                        <div id="MasterData" class="<?php if($content == "gejala" || $content == "penyakit" || $content == "gabungan" || $content == "konsultasi" || $content == "pakar" || $content == "admin" || $content == "informasi" || $content == "form tambah gejala" || $content == "form ubah gejala" || $content == "form tambah penyakit" || $content == "form ubah penyakit" || $content == "form ubah profile" || $content == "form ubah info" || $content == "form tambah gabungan" || $content == "form ubah gabungan" || $content == "detail kons") { ?> tab-pane active notika-tab-menu-bg animated flipInX <?php } else { ?> tab-pane notika-tab-menu-bg animated flipInX  <?php }?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('gejala')?>">Data Gejala</a>
                                </li>
                                <li><a href="<?= base_url('penyakit')?>">Data Penyakit</a>
                                </li>
                                <li><a href="<?= base_url('gabungan')?>">Data Gabungan</a>
                                </li>
                                <li><a href="<?= base_url('konsultasi')?>">Data Konsultasi</a>
                                </li>
                                <li><a href="<?= base_url('info')?>">Informasi ISPA</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Profile" class="<?php if($content == "form password") { ?> tab-pane active notika-tab-menu-bg animated flipInX <?php } else { ?> tab-pane  notika-tab-menu-bg animated flipInX <?php }?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('login/logout')?>">Keluar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
<?php }?>