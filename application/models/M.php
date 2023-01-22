  <!--/ News Single Star /-->
  <section class="news-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
          <div class="post-information">
            <ul class="list-inline text-center color-a">
              <li class="list-inline-item mr-2">
                <span class="color-text-a">Berdasarkan gejala yang Anda pilih, aplikasi ini akan secara otomatis memberikan hasil deteksi dini penyakit ISPA pada anak.</span>
              </li>
            </ul>
          </div>
          <div class="post-content color-text-a">
          <div class="form-comments">
            <form action="<?= base_url('konsultasi/add');?>" method="post">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <label for="nama">Nama Anak</label>
                    <input type="text" name="nama_anak" class="form-control form-control-lg form-control-a" id="nama" placeholder="Nama Anak *" autocomplete="off" required autofocus="">
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <label for="usia">Usia Anak (dalam tahun)</label>
                    <input type="text" name="usia_anak" autocomplete="off" onkeypress="return hanyaAngka(event)"  class="form-control form-control-lg form-control-a" id="usia"
                      placeholder="Usia Anak *" required>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <label for="inputUrl">Alamat</label>
                    <input type="text" name="alamat_anak" autocomplete="off" class="form-control form-control-lg form-control-a" id="alamat" placeholder="Alamat *" required="">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="post-information">
            <ul class="list-inline text-center color-a">
              <li class="list-inline-item mr-2">
                <span class="color-text-a">Berdasarkan gejala yang Anda pilih, aplikasi ini akan secara otomatis memberikan hasil deteksi dini penyakit ISPA pada anak.</span>
              </li>
            </ul>
          </div>  
            <?php if ( $check==FALSE ): ?>
              <section class="col row m-0">
                  <div class="col my-auto">
                    <h1 class="display-4 text-center text-uppercase">Pemberitahuan !!!</h1>
                    <blockquote class="blockquote text-center">
                      <p class="mb-0">Sistem konsultasi belum siap! Tidak ditemukan data gejala untuk memulai sesi konsultasi.</p>
                      <footer class="blockquote-footer bg-transparent">Oleh <cite title="Source Title">Admin</cite></footer>
                    </blockquote>
                  </div>
              </section>
          <?php else: ?>
                      <?php
                        $att = array(
                          'class' => 'col-md-10 offset-md-1 col-lg-8 offset-lg-2',
                        );
                echo form_open('konsultasi/hasil',$att);
                unset($att);     ?>
                      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2"> 
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Gejala</th>
                                        <th>Pilihan Anda</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($gejala as $no => [ 'id_gejala'=>$id_gejala, 'nama_gejala'=>$nama_gejala]): ?>
                                    <tr>
                                        <td><?php echo $nama_gejala ?></td>
                                        <td>
                                            <?php echo form_checkbox('pilihan[]', $id_gejala, FALSE) ?>
                                        </td>
                                    </tr>
                                      <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
        <?php
        if (isset($att)) unset($att);
        $att = array(
          'name'          => 'submit',
          'id_gejala'     => 'submit',
          'class'         => 'btn btn-block btn-outline-dark my-1',
          'type'          => 'submit',
          'content'       => 'Hitung'
        );
        ?>
        <div class="col p-0">
          <?php echo form_button($att); ?>
        </div>

        <?php echo form_close() ?>    
          <?php endif; ?>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ News Single End /-->