<?php if($level == "pakar"){ ?>

        <!-- Notification area Start-->
        <div class="notification-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="alert alert-block alert-info">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-warning"></i> KETERANGAN 
                            </strong>
                            <br>Berikut data gabungan atau relasi antara gejala dan penyakit yang memiliki nilai kepastian MB (Measure of Increased Belief) dan MD (Measure of Increased Disbelief) dengan cakupan sebagai berikut:<br>1.0 (Pasti Ya) <br>0.8 (Hampir Pasti)  <br>0.6 (Kemungkinan Besar)<br> 0.4 (Mungkin) <br>0.2 (Hampir Mungkin)  <br>0.0 (Tidak Tahu atau Tidak Yakin)<b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Notification area End-->
    <?php if (!empty($this->session->flashdata('info'))) { ?>
    <!-- Notification area Start-->
        <div class="notification-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="alert alert-block alert-success">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>Sukses!
                            </strong>
                            Update Berhasil!<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Notification area End-->
          <?php } else if (!empty($this->session->flashdata('gagal'))) { ?>
            <!-- Notification area Start-->
        <div class="notification-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="alert alert-block alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-close"></i> Gagal!
                            </strong>
                            Update Gagal!<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Notification area End-->
          <?php } ?>
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
                                            <h2>Data Gabungan</h2>
                                            <p>Welcome to SP ISPA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                    <div class="breadcomb-report">
                                        <a href="<?= base_url('gabungan/tambah')?>" class="btn btn-mini btn-plus">Tambah Data</a>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Penyakit</th>
                                        <th>Gejala</th>
                                        <th>Nilai MB</th>
                                        <th>Nilai MD</th>
                                        <th>Nama Penginput</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($read as $data) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data->nama_penyakit ?></td>
                                        <td><?= $data->nama_gejala ?></td>
                                        <td><?= $data->nilai_mb ?></td>
                                        <td><?= $data->nilai_md ?></td>
                                        <td><?= $data->nama_pakar ?></td>
                                        <td>                                            
                                                <center>
                                                    <a href="<?= site_url('gabungan/ubah/'.$data->id_gabungan)?>" class="btn btn-mini btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= site_url('gabungan/hapus/'.$data->id_gabungan)?>" onclick="return confirm('Apakah anda yakin akan menghapus data?');" class="btn btn-mini btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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
    <!-- Data Table area End-->
<?php } else if($level == "admin"){ ?>
        <!-- Notification area Start-->
        <div class="notification-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="alert alert-block alert-info">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-warning"></i> KETERANGAN
                            </strong>
                            <br>Berikut data gabungan atau relasi antara gejala dan penyakit yang memiliki nilai kepastian MB (Measure of Increased Belief) dan MD (Measure of Increased Disbelief) dengan cakupan sebagai berikut:<br>1.0 (Pasti Ya) <br>0.8 (Hampir Pasti)  <br>0.6 (Kemungkinan Besar)<br> 0.4 (Mungkin) <br>0.2 (Hampir Mungkin)  <br>0.0 (Tidak Tahu atau Tidak Yakin)<b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Notification area End-->
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
                                        <h2>Data Gabungan</h2>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Penyakit</th>
                                        <th>Gejala</th>
                                        <th>Nilai MB</th>
                                        <th>Nilai MD</th>
                                        <th>Nama Penginput</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($read as $data) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data->nama_penyakit ?></td>
                                        <td><?= $data->nama_gejala ?></td>
                                        <td><?= $data->nilai_mb ?></td>
                                        <td><?= $data->nilai_md ?></td>
                                        <td><?= $data->nama_pakar ?></td>
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
    <!-- Data Table area End-->
<?php }?>