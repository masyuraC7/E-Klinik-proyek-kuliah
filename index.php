<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Klinik - Landing Page</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/landingPage/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="assets/extensions/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/landingPage/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/landingPage/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/landingPage/css/style.css" rel="stylesheet">

  <!-- Tambahan CSS -->
  <style>
    #hero{
      background-image: url("assets/images/klinik.jpeg");
      background-size: cover;
    }
  </style>
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">E-Klinik</a></h1>
      <!-- .navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#service">Layanan</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="form-pendaftaran.php">Isi Formulir</a></li>
          <li><a class="getstarted scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center text-white">
          <h1 class="text-white">Selamat Datang di <br> E-Klinik</h1>
          <h2 class="text-white">Kami selalu sedia melayani masyarakat yang ingin berobat maupun konsultasi dengan dokter terbaik yang kami punya.</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="#about" class="btn-get-started scrollto">Lebih Banyak</a>
      </div>

      <div id="service" class="row icon-boxes">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="ri-stack-line"></i></div>
            <h4 class="title"><a href="">Melayani Pengobatan Umum</a></h4>
            <p class="description">Kami melayani masyarakat yang ingin melakukan konsultasi ataupun pengobatan dengan Dokter Umum Terbaik kami.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="ri-command-line"></i></div>
            <h4 class="title"><a href="">Melayani Rujukan Ke Poliklinik</a></h4>
            <p class="description">Kami melayani masyarakat yang ingin melakukan rujukan ke poliklinik yang tersedia dengan Dokter Spesialisasi terbaik kami.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="ri-command-line"></i></div>
            <h4 class="title"><a href="">Website Online 24/7</a></h4>
            <p class="description">Website kami selalu online 24/7 untuk mendata masyarakat yang mengajukan keluhan diberbagai fasilitas dan masyarakat dapat langsung menuju klinik pada jam kerja 08.00 - 17.00 untuk mengambil tiket antrian.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>
          <p>E-Klinik (Sistem Informasi Klinik)</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Kami menyediakan beberapa layanan seperti:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Keluhan untuk berobat ke dokter umum</li>
              <li><i class="ri-check-double-line"></i> Keluhan untuk berobat ke dokter spesialisasi poliklinik</li>
              <li><i class="ri-check-double-line"></i> Sistem akan langsung mencatat dan mengelola inputan masyarakat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Sistem akan mencatat dan mengelola inputan keluhan masyarakat dan masyarakat dapat langsung datang ke klinik setelahnya agar mendapat tiket antrian. Segera konsultasikan keluhan anda ke klinik kami agar kami dapat dengan cepat mengetahu dan mengobati keluhan penyakit anda.
            </p>
            <a href="#" class="btn-learn-more">Konsultasikan Keluhan Anda Sekarang</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">
        <div class="row justify-content-end">
          <!-- Total Pasien Mendaftar -->
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <?php
                  $sql = "SELECT * FROM db_pasien_terbaru;";
                  $query = mysqli_query ($conn, $sql);
                  $rowcount = mysqli_num_rows($query);
              ?>
              <span data-purecounter-start="0" data-purecounter-end="<?= $rowcount; ?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Pasien yang mendaftar</p>
            </div>
          </div>

          <!-- Total Pasien Dokter Umum -->
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <?php
                  $sql = "SELECT * FROM db_pasien_umum;";
                  $query = mysqli_query ($conn, $sql);
                  $rowcount = mysqli_num_rows($query);
              ?>
              <span data-purecounter-start="0" data-purecounter-end="<?= $rowcount; ?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Pasien Dokter Umum</p>
            </div>
          </div>

          <!-- Total Pasien Dokter Poliklinik -->
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <?php
                  $sql = "SELECT * FROM db_pasien_poliklinik;";
                  $query = mysqli_query ($conn, $sql);
                  $rowcount = mysqli_num_rows($query);
              ?>
              <span data-purecounter-start="0" data-purecounter-end="<?= $rowcount; ?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Pasien Dokter Poliklinik</p>
            </div>
          </div>

          <!-- Total Pasien Sembuh -->
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <?php
                  $sql = "SELECT * FROM db_pasien_terbaru where kondisi='Sembuh';";
                  $query = mysqli_query ($conn, $sql);
                  $rowcount = mysqli_num_rows($query);
              ?>
              <span data-purecounter-start="0" data-purecounter-end="<?= $rowcount; ?>" data-purecounter-duration="2" class="purecounter"></span>
              <p>Pasien Sembuh</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Kontak</h2>
        </div>

        <div class="row mt-2">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Rungkut Utara, Surabaya, Jawa Timur, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>E-Klinik@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>No. Telepon:</h4>
                <p>0912 8172 1297</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
              <div class="row gy-2 gx-md-3">
                <p>Punya banyak keluhan? atau punya pertanyaan dan butuh konsultasi dokter? Segera konsultasikan keluhan anda dengan kami melalui fasilitas kami atau juga bisa menghubungi kami dengan kontak yang tersedia pada samping kanan ini.</p>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
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

  <!-- Template Main JS File -->
  <script src="assets/landingPage/js/main.js"></script>
</body>
</html>