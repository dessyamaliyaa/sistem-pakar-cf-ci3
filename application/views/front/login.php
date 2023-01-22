  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Masuk</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?= base_url('home') ?>">Beranda</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Masuk
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
          <div class="post-content color-text-a">
          <div class="form-comments">
            <form class="form-a" action="<?php echo base_url('login/chek_login'); ?>" method="post" role="form">              
                    <?php if (!empty($this->session->flashdata('notif'))) { ?>
                    <div class="x_content bs-example-popovers">
                      <div class="alert alert-danger alert-dismissible " role="alert">
                      <?= $this->session->flashdata('notif') ?>
                      </div>
                    </div>
                <?php } ?>
              <div class="row">
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <label for="username">Nama Pengguna</label>
                    <input type="text" class="form-control form-control-lg form-control-a" id="username" name="username" placeholder="Nama Pengguna *" autocomplete="off" required="" autofocus="">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <label for="username">Kata Sandi</label>
                    <input type="password" class="form-control form-control-lg form-control-a" id="password" name="password" placeholder="Kata Sandi *" required="">
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-a">Masuk</button>
                </div>
              </div>
            </form>
          </div>
          </div>
          <div class="post-information">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ News Single End /-->