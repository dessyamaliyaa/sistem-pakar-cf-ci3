<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SP ISPA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/back/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

    <script src=”<?php echo base_url(); ?>/assets/tinymce/js/tinymce/tinymce.dev.js”></script>
    <script src=”<?php echo base_url(); ?>/assets/tinymce/js/tinymce/tinymce.min.js”></script>
    <script src=”<?php echo base_url(); ?>/assets/tinymce/js/tinymce/plugins/table/plugin.dev.js”></script>
    <script src=”<?php echo base_url(); ?>/assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js”></script>
    <script src=”<?php echo base_url(); ?>/assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js”></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/back/select2/dist/css/select2.min.css"></script>

    <script type="text/javascript" src="<?= base_url() ?>/assets/back/select2/dist/js/select2.min.js"></script>
    <!--
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
     tinymce -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>  
  
    <script>
      tinymce.init({
        selector: '#mytextarea',
        plugins: [
          'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
      });
    </script>

    <!-- summernote 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/summernote/summernote-bs4.css';?>">


    ckeditor 
    <script type="text/javascript" src="<?php base_url(); ?>assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php base_url(); ?>assets/ckfinder/ckfinder.js"></script>
    -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Data Table JS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/jquery.dataTables.min.css">
    
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/chosen/chosen.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/<?= base_url() ?>/assets/back/css/bootstrap.min.css">
    <!-- font awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/animate.css">
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/summernote/summernote.css">
    <!-- Range Slider CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/themesaller-forms.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/notika-custom-icon.css">
    <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/color-picker/farbtastic.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/chosen/chosen.css">
    <!-- notification CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/notification/notification.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/dropzone/dropzone.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/wave/waves.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/back/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/bootstrap.min.css">
    <!-- font awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/wave/waves.min.css">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/notika-custom-icon.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/back/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item"><a data-toggle="dropdown" ><span>Welcome, 
                                <?php 
                                    $level = $this->session->userdata('level');
                                    if($level == "admin"){
                                        $id = $this->session->userdata('id_admin');
                                    $nama = $this->session->userdata('nama');
                                    }else if($level == "pakar"){
                                        $id = $this->session->userdata('id_pakar');
                                    $nama = $this->session->userdata('nama_pakar');
                                    }
                                            if($level == ""){
                                                redirect('home/login');
                                            }else{
                                                echo $nama;
                                            }
                                ?></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <?php 
    $this->load->view('back/navbar');
  ?>

  <?php 
    $this->load->view('back/content');
  ?>
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2022
. All rights reserved. DESSY AMALIYA DWI RIYANTO PUTRI.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/flot/curvedLines.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/knob/jquery.knob.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/knob/jquery.appear.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/wave/waves.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/wave/wave-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/plugins.js"></script>
	<!--  Chat JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/chat/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/chat/jquery.chat.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/main.js"></script>
    <!-- Data Table JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/data-table/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/data-table/data-table-act.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/bootstrap-select/bootstrap-select.js"></script>
    <!--  chosen JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/chosen/chosen.jquery.js"></script>
    <!-- jquery
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/knob/jquery.knob.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/knob/jquery.appear.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/knob/knob-active.js"></script>
    <!-- Input Mask JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/icheck/icheck.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/color-picker/farbtastic.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/color-picker/color-picker.js"></script>
    <!--  notification JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/notification/bootstrap-growl.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/notification/notification-active.js"></script>
    <!--  summernote JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/summernote/summernote-updated.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/dropzone/dropzone.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/wave/waves.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/wave/wave-active.js"></script>
    <!--  chosen JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/chosen/chosen.jquery.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/main.js"></script>
        <!--  wizard JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/wizard/wizard-active.js"></script>
    <script type="text/javascript">
        // Provinsi
        $(document).ready(function() {
            $("#gejala").select2({
                ajax: {
                    url: '<?= base_url() ?>gabungan/getgejala',
                    type: "post",
                    dataType: 'json',
                    delay: 200,
                    data: function(params) {
                        return {
                            searchTerm: params.term
                        };
                    },
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            });
        });
    </script>
        <script src="<?= base_url() ?>/assets/back/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/knob/jquery.knob.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/knob/jquery.appear.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/wave/waves.min.js"></script>
    <script src="<?= base_url() ?>/assets/back/js/wave/wave-active.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?= base_url() ?>/assets/back/js/main.js"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

</body>

</html>