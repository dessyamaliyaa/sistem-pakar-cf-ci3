  <!--/ News Single Star /-->
  <section class="news-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
          <ul class="list-inline text-center color-a">
            <li class="list-inline-item mr-2">
              <span class="color-text-a"><b>Data Diri :</b></span>
            </li>
          </ul>  
          <table id="data-table-basic" class="table table-striped">
            <thead>
              <?php if(sizeof($listPenyakit)>0) { ?>
              <tr>
                <th><b>Nama Anak</b></th>
                <th><?php echo $dataHasil['nama_anak'];?></th>
              </tr>
              <tr>
                <th><b>Usia Anak (dalam tahun)</b></th>
                <th><?php echo $dataHasil['usia_anak'];?></th>
              </tr>
              <tr>
                <th><b>Alamat Anak</b></th>
                <th><?php echo $dataHasil['alamat_anak'];?></th>
              </tr>              
            </thead>
          </table> 
        </div> 
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2"> 
          <ul class="list-inline text-center color-a">
            <li class="list-inline-item mr-2">
              <span class="color-text-a"><b>Gejala yang Anda pilih :</b></span>
            </li>
          </ul>            
          <table id="data-table-basic" class="table table-striped">
            <thead>
              <tr>
                <th><b>No</b></th>
                <th><b>Gejala</b></th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; foreach($listGejala->result() as $value){ ?>
              <tr>
                <td><?php echo $i++?></td>
                <td><?php echo $value->kode_gejala." - ".$value->nama_gejala?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>             
        </div> 
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2"> 
          <ul class="list-inline text-center color-a">
            <li class="list-inline-item mr-2">
              <span class="color-text-a"><b>Hasil Konsultasi :</b></span>
            </li>
          </ul>            
          <table id="data-table-basic" class="table table-striped">
            <thead>
              <tr>
                <th><b>No</b></th>
                <th><b>Nama Penyakit</b></th>
                <th><b>Tingkat Kepercayaan</b></th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; foreach($listPenyakit as $value){?>
              <tr>
                <td><?php echo $i++?></td>
                <td><?php echo $value['nama_penyakit']?></td>
                <td><?php echo $value['nilai_cf']?> %</td>
              </tr>
              <?php } ?>
            </tbody>
          </table>             
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2"> 
          <ul class="list-inline text-center color-a">
            <li class="list-inline-item mr-2">
              <span class="color-text-a"><b>Kesimpulan :</b></span>
            </li>
          </ul>  
          <div class="color-text-a">            
            <p>
              Berdasarkan gejalanya, pasien diprediksi mengidap penyakit <b><?php echo $dataHasil['nama_penyakit'];?></b> dengan tingkat kepercayaan <b><?php echo $dataHasil['nilai_cf'];?> %</b>. 
            <br><?php echo $dataHasil['keterangan'];?></p>
            <p style="font-style: bold; color: red; font-size: 13px;">*Hasil diagnosa ini masih membutuhkan pemeriksaan lebih lanjut.</p>
          </div>
          <?php }else{?>
                <p>
                    Penyakit tidak dapat diprediksi karena tingkat kepercayaan gejala terlalu rendah
                </p>
            <?php }?>                      
        </div>     
      </div>
    </div>
  </div>
  </section>
  <!--/ News Single End /-->