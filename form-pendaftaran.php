<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Custom Title -->
  <title>
    <?php
    
        if (!isset($_GET['page'])) echo "E-Klinik - Form Pendaftaran";
        else if($_GET['page'] == "dokterUmum") echo "E-Klinik - Form Pendaftaran Dokter Umum";
        else if($_GET['page'] == "poliklinik") echo "E-Klinik - Form Pendaftaran Poliklinik";
    
    ?>
  </title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/landingPage/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="assets/extensions/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/landingPage/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/landingPage/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/landingPage/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/landingPage/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/landingPage/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">E-Klinik</a></h1>
      <!-- .navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#service">Layanan</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="form-pendaftaran.php">Isi Formulir</a></li>
          <li><a class="getstarted scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <!-- main section -->
  <main id="main">
    <?php
        // Pesan Success/Error
        if (isset($_GET['status']) && $_GET['status'] == 'sukses') {
          include ("popup.php");
        }

        // Custom Tampilan
        if (isset($_GET['page'])) {
            include "controller/modul-form.php";
        }else{
    ?>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Daftar Pelayanan</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Daftar Pelayanan</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="formulir-umum.php">Pendaftaran ke Dokter Umum</a></h4>
              <p>Pendaftaran ini ditujukan kepada pasien yang hanya ingin berobat ke dokter umum di klinik saja.</p>
              <a class="btn btn-primary mt-2" href="formulir-umum.php">Daftar ke Dokter Umum</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="formulir-poliklinik.php">Pendaftaran ke Poliklinik</a></h4>
              <p>Pendaftaran ini ditujukan kepada pasien yang ingin berobat ke poliklinik.</p>
              <a class="btn btn-primary mt-2" href="formulir-poliklinik.php">Daftar ke Poliklinik</a>
            </div>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
    </section>
    <!-- End Sevices Section -->

    <?php } ?>
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>E-Klinik</span></strong>. Didesain oleh <a href="#">E-Klinik</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/landingPage/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/landingPage/vendor/aos/aos.js"></script>
  <script src="assets/landingPage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/landingPage/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/landingPage/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/landingPage/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/landingPage/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/landingPage/js/main.js"></script>

</body>

</html>