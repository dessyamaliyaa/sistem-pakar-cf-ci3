<?php if($level == "pakar") {?>
        <!-- Breadcomb area Start-->
        <div class="breadcomb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcomb-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcomb-wp">
                                        <div class="breadcomb-icon">
                                            <i class="notika-icon notika-app"></i>
                                        </div>
                                        <div class="breadcomb-ctn">
                                            <h2>Detail Hasil Konsultasi</h2>
                                            <p>Welcome to SP ISPA</p>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcomb area End--> 
    <!-- Normal Table area Start-->
    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="bsc-tbl">
                            <table class="table table-sc-ex">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Anak</th>
                                        <th>Usia Anak</th>
                                        <th>Alamat Anak</th>
                                        <th>Waktu Konsultasi</th>
                                        <th>Hasil Konsultasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#</td>
                                        <td><?php echo $data['nama_anak']; ?></td>
                                        <td><?php echo $data['usia_anak']; ?></td>
                                        <td><?php echo $data['alamat_anak']; ?></td>
                                        <td><?php echo $data['time']; ?></td>
                                        <td><?php echo $data['nama_penyakit']; ?> / <?php echo $data['nilai_cf']; ?> %</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <p>Gejala yang dipilih :</p>
                        </div>
                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Gejala</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($detail as $data) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data->nama_gejala ?></td>
                                        <td><?php if ($data->nilai=="0"){
                                            ?>Tidak<?php } elseif ($data->nilai=="1.0"){
                                        ?>Pasti<?php }?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Normal Table area End-->
<?php } else{ ?>
        <!-- 404 Page area Start-->
    <div class="error-page-area">
        <div class="error-page-wrap">
            <i class="notika-icon notika-close"></i>
            <h2>ERROR 404</h2>
            <p>Maaf, halaman yang Anda masukkan tidak dapat diakses.</p>
        </div>
    </div>
    <!-- 404 Page area End-->
<?php } ?>