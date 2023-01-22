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
                                            <h2>Data Konsultasi</h2>
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
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="modals-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Anak</th>
                                        <th>Usia Anak</th>
                                        <th>Alamat Anak</th>
                                        <th>Waktu Konsultasi</th>
                                        <th>Hasil Konsultasi</th>
                                        <th>Detail Konsultasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($read as $data) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data->nama_anak ?></td>
                                        <td><?= $data->usia_anak ?></td>
                                        <td><?= $data->alamat_anak ?></td>
                                        <td><?= $data->time ?></td>
                                        <td><?= $data->nama_penyakit ?> / <?= $data->nilai_cf ?> %</td>
                                        <td>
                                            <center>
                                                    <a href="<?= site_url('konsultasi/detail/'.$data->id_konsultasi)?>" class="btn btn-mini btn-info" title="Detail"><i class="fa fa-eye"></i></a>
                                                </center>
                                        </td>
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
</div>
    <!-- Data Table area End-->
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