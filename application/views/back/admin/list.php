<?php if($level == "admin"){ ?>
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
                                            <h2>Data Admin</h2>
                                            <p>Welcome to SP ISPA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                    <div class="breadcomb-report">
                                        <a href="<?= base_url('admin/tambah')?>" class="btn btn-mini btn-plus">Tambah Data</a>
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
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach ($read as $data) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data->nama ?></td>
                                            <td><?= $data->username ?></td>
                                            <td>                                            
                                                <center>
                                                    <a href="<?= site_url('admin/ubah/'.$data->id_admin)?>" class="btn btn-mini btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <?php 
                                                    $result = $this->db->get('tb_admin');
                                                    if($result->num_rows()>1){
                                                    ?>
                                                    <a href="<?= site_url('admin/hapus/'.$data->id_admin)?>" onclick="return confirm('Apakah anda yakin akan menghapus data?');" class="btn btn-mini btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                                    <?php } ?>
                                                </center>
                                            </td>
                                            <td></td>
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