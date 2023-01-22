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
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Beranda</h2>
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
    <!-- Wizard area Start-->
    <div class="wizard-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wizard-wrap-int">
                        <div id="rootwizard">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="container-pro wizard-cts-st">
                                        <ul>
                                            <li><a href="#tab1" data-toggle="tab">Tentang SP ISPA</a></li>
                                            <li><a href="#tab2" data-toggle="tab">Tentang Certainty Factor</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane wizard-ctn" id="tab1">
                                    <p><b>SP ISPA</b> merupakan aplikasi sistem pakar yang dirancang agar dapat melakukan deteksi awal penyakit Infeksi Saluran Pernapasan Akut (ISPA) pada anak dengan menggunakan metode <i>Certainty Factor</i>. Sistem pakar ini diharapkan dapat menjadi sarana informasi bagi masyarakat mengenai penyakit Infeksi Saluran Pernapasan Akut (ISPA) pada anak.</p>
                                    <p class="wizard-mg-ctn"><b>SP ISPA</b> dapat dikelola oleh Admin dan Pakar sesuai fungsinya masing-masing. </p>
                                </div>
                                <div class="tab-pane wizard-ctn" id="tab2">
                                    <p>
                                        Certainty Factor (CF) merupakan salah satu teknik yang digunakan untuk mengatasi ketidakpastian dalam pengambilan keputusan. Certainty Factor (CF) dapat terjadi dengan berbagai kondisi.
                                        Diantara kondisi yang terjadi adalah terdapat beberapa antensenden (dalam rule yang berbeda) dengan satu konsekuen yang sama. Dalam kasus ini, kita harus mengagregasikan nilai CF keseluruhan dari setiap kondisi yang ada. Berikut formula yang ada dalam Certainty Factor:<br><br>
                                        CFc (CF1,CF2) = CF1 + (CF2 *(1- CF1)) ; jika CF1 dan CF2 keduanya positif<br>CFc (CF1,CF2) = CF1 + CF2 (1+ CF1) ; jika CF1 dan CF2 keduanya negative<br>CFc (CF1,CF2) = {CF1 + CF2} / (1-min{| CF1|,| CF2|}) ; jika salah satu negatif<br><br>
                                        Pada sistem pakar ini, digunakan rumus kedua pertama yaitu <b>CFc (CF1,CF2) = CF1 + (CF2 *(1- CF1))</b>.<br> Contoh:<br><br> Contoh :
                                        [R1] : IF pilek THEN pneumonia {cf : 0.40}<br>
                                        [R2] : IF sakit kepala THEN pneumonia {cf : 0.40}<br>
                                        [R3] : IF nyeri dada THEN pneumonia {cf : 0.80}<br>
                                        [R4] :IF mual THEN pneumonia {cf : 0.3}<br><br>
                                        Tentukan Nilai dari CF gabungannya:<br>
                                        1. CF(A) = CF1 + (CF2 *(1- CF1))<br>
                                        = 0,40 + ( 0,40 * ( 1 - 0,4 ))<br>
                                        = 0,40 + ( 0,40 * 0,60 )<br>
                                        = 0,40 + ( 0,24 )<br>
                                        = 0,64 <br>
                                        2. CF(B) = CF3 + (CF(A) *(1- CF3))<br>
                                        = 0,80 + ( 0,64 * ( 1 - 0,80 ))<br>
                                        = 0,80 + ( 0,64 * 0,20 )<br>
                                        = 0,80 + ( 0,128 )<br>
                                        = 0,928 <br>
                                        3. CF(C) = CF4 + (CF(B) *(1- CF4))<br>
                                        = 0,30 + ( 0,928 * ( 1 - 0,30 ))<br>
                                        = 0,30 + ( 0,928 * 0,70 )<br>
                                        = 0,30 + ( 0,6496 )<br>
                                        = 0,9496 <br><br>
                                        Kesimpulannya: Suatu penyakit Pneumonia disebabkan oleh gejala-gejala tersebut di atas memiliki nilai Certainty Factor ( CF ) sebesar 0,9496
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wizard area End-->