<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SP ISPA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url() ?>/assets/back/img/favicon.ico" rel="icon">
  <link href="<?= base_url() ?>/assets/front/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url() ?>/assets/front/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url() ?>/assets/front/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/front/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/front/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/front/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url() ?>/assets/front/css/style.css" rel="stylesheet">


  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  
  <?php 
    $this->load->view('front/navbar');
  ?>

  <?php 
    $this->load->view('front/content');
  ?>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              Copyright © 2022
. All rights reserved. DESSY AMALIYA DWI RIYANTO PUTRI.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="<?= base_url() ?>/assets/front/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>/assets/front/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url() ?>/assets/front/lib/popper/popper.min.js"></script>
  <script src="<?= base_url() ?>/assets/front/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/assets/front/lib/easing/easing.min.js"></script>
  <script src="<?= base_url() ?>/assets/front/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>/assets/front/lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url() ?>/assets/front/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url() ?>/assets/front/js/main.js"></script>

</body>
</html>
