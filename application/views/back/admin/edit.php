<?php if($level == "admin"){ ?>
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
                                        <h2>Form Ubah Data Admin</h2>
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
                            <form action="<?php echo base_url('admin/ubah/'.$admin['id_admin']); ?>" method="post">
                                <div class="form-group">                                    
                                    <div class="nk-int-st">
                                    <label>Nama Lengkap</label>
                                        <input type="text" autofocus="" autocomplete="off" name="nama" class="form-control" placeholder="Nama Admin *" value="<?php echo $admin['nama']; ?>">
                                    </div>
                                </div>                           
                                <div class="form-group">                                    
                                    <div class="nk-int-st">
                                    <label>Username</label>
                                        <input type="text" autofocus="" autocomplete="off" name="username" class="form-control" placeholder="Username Admin *" value="<?php echo $admin['username']; ?>">
                                    </div>
                                </div>                             
                                <div class="form-group">                                    
                                    <div class="nk-int-st">
                                    <label>Password</label>
                                        <input type="password" autofocus="" autocomplete="off" name="password" class="form-control" placeholder="Isi Password jika ingin mengubah Password">                                    
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