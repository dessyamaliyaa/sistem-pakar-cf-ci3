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
                                        <h2>Form Tambah Data Gejala</h2>
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
					        <form action="<?= base_url('gejala/tambah');?>" method="post">
					            <div class="form-group">					            	
                                    <div class="nk-int-st">
					                <label>Nama Gejala</label>
					                    <input type="text" autofocus="" name="nama_gejala" class="form-control" placeholder="Nama Gejala *" autocomplete="off">
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