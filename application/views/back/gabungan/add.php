<?php if($level == "pakar") {?>
    <!-- Breadcomb area Start-->
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
                                <i class="ace-icon fa fa-warning"></i> KETERANGAN<br>
                            </strong>Silahkan pilih gejala yang sesuai dengan penyakit yang ada, dan berikan Nilai Kepastian atau MB (Measure of Increased Belief) dan Nilai Ketidakpastian atau MD (Measure of Increased Disbelief) dengan cakupan sebagai berikut:<br>1.0 (Pasti Ya) <br>0.8 (Hampir Pasti)  <br>0.6 (Kemungkinan Besar)<br> 0.4 (Mungkin) <br>0.2 (Hampir Mungkin)  <br>0.0 (Tidak Tahu atau Tidak Yakin) <b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Notification area End-->
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
                                        <h2>Form Tambah Data Gabungan</h2>
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
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                    <div class="form-element-list">
                        <div class="row">                        	
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					        <form action="<?= base_url('gabungan/tambah');?>" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="nk-int-mk">
                                                <h2>Nama Penyakit</h2>
                                            </div>
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                    <i class="notika-icon notika-edit"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen" class="form-control" data-placeholder="Pilih Penyakit..." name="id_penyakit">
                                                                <option value="">Pilih Penyakit...</option>
                                                                <?php foreach ($penyakit as $data) { ?>
                                                                <option value="<?= $data->id_penyakit ?>"><?= $data->nama_penyakit?></option>
                                                                <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="nk-int-mk">
                                                <h2>Nama Gejala</h2>
                                            </div>
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                    <i class="notika-icon notika-edit"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen" class="form-control" data-placeholder="Pilih Gejala..." name="id_gejala">
                                                                <option value="">Pilih Gejala...</option>
                                                                <?php foreach ($gejala as $data) { ?>
                                                                 <option value="<?= $data->id_gejala ?>"><?= $data->nama_gejala?></option>
                                                                <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="nk-int-mk">
                                                <h2>Nilai Kepastian (MB)</h2>
                                            </div>
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                    <i class="notika-icon notika-edit"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                    <select name="nilai_mb" id="nilai_mb" class="form-control form-control-lg form-control-a" required>
                                                        <option value="1.0">Pasti Ya</option>
                                                        <option value="0.8">Hampir Pasti</option>
                                                        <option value="0.6">Kemungkinan Besar</option>
                                                        <option value="0.4">Mungkin</option>
                                                        <option value="0.2">Hampir Mungkin</option>
                                                        <option value="0">Tidak Tahu atau Tidak Yakin</option>
                                                    </select>                          
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="nk-int-mk">
                                                <h2>Nilai Ketidakpastian (MD)</h2>
                                            </div>
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                    <i class="notika-icon notika-edit"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                    <select name="nilai_md" id="nilai_md" class="form-control form-control-lg form-control-a" required>
                                                        <option value="1.0">Pasti Ya</option>
                                                        <option value="0.8">Hampir Pasti</option>
                                                        <option value="0.6">Kemungkinan Besar</option>
                                                        <option value="0.4">Mungkin</option>
                                                        <option value="0.2">Hampir Mungkin</option>
                                                        <option value="0">Tidak Tahu atau Tidak Yakin</option>
                                                    </select>          
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
					            <button type="submit" name="simpan" class="btn btn-success notika-btn-success">Submit</button>
					        </form>
					    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Element area End-->
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