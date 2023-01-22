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
                                            <h2>Data Penyakit</h2>
                                            <p>Welcome to SP ISPA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                    <div class="breadcomb-report">
                                        <a href="<?= base_url('penyakit/tambah')?>" class="btn btn-mini btn-plus">Tambah Data</a>
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
                                        <th>Nama Penyakit</th>
                                        <th>Keterangan Penyakit</th>
                                        <th>Penginput</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($read as $data) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data->nama_penyakit ;?></td>
                                        <td><?= word_limiter($data->keterangan,50); ?></td>
                                        <td><?php if($data->id_penginput>0 && $data->id_penginput<=5){?>Admin<?php }else if($data->id_penginput>5 && $data->id_penginput<=10){?>Pakar<?php } ?></td>
                                        <td>                                            
                                                <center>
                                                    <a href="<?= site_url('penyakit/ubah/'.$data->id_penyakit)?>" class="btn btn-mini btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= site_url('penyakit/hapus/'.$data->id_penyakit)?>" onclick="return confirm('Apakah anda yakin akan menghapus data?');" class="btn btn-mini btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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