  <!-- javascript -->
  <script type="text/javascript">
      function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode > 31 && (charCode < 48 || charCode > 57))

          return false;
          return true;
      }      
  </script> 
  <!-- //javascript -->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Konsultasi</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Beranda</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Konsultasi</a>
              </li>             
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
  <!--/ News Single Star /-->
  <section class="news-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
          <?php if (!empty($this->session->flashdata('notif'))) { ?>
                    <div class="x_content bs-example-popovers">
                      <div class="alert alert-danger alert-dismissible " role="alert">
                      <?= $this->session->flashdata('notif') ?>
                      </div>
                    </div>
                <?php } ?>
          <div class="post-information">            
            <ul class="list-inline text-center color-a">
              <li class="list-inline-item mr-2">
                <span class="color-text-a">Berdasarkan gejala yang Anda pilih, aplikasi ini akan secara otomatis memberikan hasil deteksi dini penyakit ISPA pada anak.</span>
              </li>
            </ul>  
            <div class="form-comments">
              <form class="form-horizontal" role="form" action="<?php echo base_url('home/konsultasi') ?>" method="POST">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <label for="nama">Nama Anak</label>
                        <input type="text" name="nama_anak" class="form-control form-control-lg form-control-a" id="nama_anak" placeholder="Nama Anak *" autocomplete="off" required autofocus="">
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <label for="usia">Usia Anak</label>
                          <select name="usia_anak" id="usia_anak" class="form-control form-control-lg form-control-a" required>
                            <option value="0">Kurang dari 1 tahun</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                          </select>                          
                      </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <label for="inputUrl">Alamat</label>
                        <input type="text" name="alamat_anak" autocomplete="off" class="form-control form-control-lg form-control-a" id="alamat_anak" placeholder="Alamat *" required="">
                    </div>
                  </div>
                </div>       
                <ul class="list-inline text-center color-a">
                  <li class="list-inline-item mr-2">
                    <span class="color-text-a">Pilih gejala sesuai kondisi yang terjadi pada anak Anda.</span>
                  </li>
                </ul>
                <table id="data-table-basic" class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nama Gejala</th>
                      <th>Pilihan Anda</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($listGejala as $no => [ 'id_gejala'=>$id_gejala, 'nama_gejala'=>$nama_gejala]): ?>
                    <tr>
                      <td><?php echo $nama_gejala ?></td>
                      <td>
                        <select name="gejala[]" id="" class="form-control">
                          <option value="<?php echo $id_gejala . "_0.0" ?>">Tidak</option>
                          <option value="<?php echo $id_gejala . "_1.0" ?>">Pasti</option>
                        </select>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>                            
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <button type="submit" name="simpan" class="btn btn-block btn-outline-dark my-1">Proses
                    </button>
                  </div>
                </div>
              </form>
            </div>            
          </div>         
        </div>
      </div>
    </div>
  </section>
  <!--/ News Single End /-->
  <script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
</script>