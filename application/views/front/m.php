  
            <div class="form-comments">
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
                                'class' => '',
                              );
                      echo form_open();
                      unset($att);     ?>
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                <div class="form-group">
                                  <label for="nama">Nama Anak</label>
                                  <input type="text" name="nama_anak" class="form-control form-control-lg form-control-a" id="nama_anak" placeholder="Nama Anak *" autocomplete="off" required autofocus="">
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <div class="form-group">
                                  <label for="usia">Usia Anak (dalam tahun)</label>
                                  <input type="text" name="usia_anak" autocomplete="off" onkeypress="return hanyaAngka(event)"  class="form-control form-control-lg form-control-a" id="usia_anak"
                                    placeholder="Usia Anak *" required>
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
                                            <option value="<?php echo $id_gejala . "_0.2" ?>">Ragu Ragu</option>
                                            <option value="<?php echo $id_gejala . "_0.4" ?>">Mungkin</option>
                                            <option value="<?php echo $id_gejala . "_0.6" ?>">Sangat Mungkin</option>
                                            <option value="<?php echo $id_gejala . "_0.8" ?>">Hampir Pasti</option>
                                            <option value="<?php echo $id_gejala . "_1.0" ?>">Pasti</option>
                                          </select>
                                        </td>
                                    </tr>
                                      <?php endforeach; ?>
                                </tbody>
                            </table>
                          <?php
                          if (isset($att)) unset($att);
                          $att = array(
                            'name'          => 'submit',
                            'id_gejala'     => 'submit',
                            'class'         => 'btn btn-block btn-outline-dark my-1',
                            'type'          => 'submit',
                            'content'       => 'Proses'
                          );
                          ?>
                          <div class="col p-0">
                            <?php echo form_button($att); ?>
                          </div>

                          <?php echo form_close() ?>    
                            <?php endif; ?>
            </div>