<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bethany Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v4.6.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php
  require_once('config.php');
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.php"><span>MakanYuk!</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
            <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
            <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">Kumpulan</a></li>
            <li><a class="getstarted scrollto" href="login.php">Masuk</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <?php
      session_start();
      $cek = count($_SESSION);
      if ($cek != 0) {
      ?>
        <div class="signup-form">
          <form action="home.php" method="post" enctype="multipart/form-data">
            <?php
            
            $ID = $_SESSION["ID"];
            $sql = mysqli_query($koneksi, "SELECT * FROM register where ID='$ID' ");
            $row  = mysqli_fetch_array($sql);
            ?>

            <img src="upload/<?php echo $row['File'] ?>" height="200" width="180" style="border-radius:50%;display:block;margin-left:auto;margin-right:auto;" />
            <p class="hint-text">
            <h1><?php echo $_SESSION["First_Name"] ?> <?php echo $_SESSION["Last_Name"] ?></h1></p>
            <a href="create.php" class="btn-get-started scrollto">Pesan Sekarang</a>
            <a href="logout.php" class="btn-get-started scrollto">Keluar</a>
            <!-- <div class="text-center"><a href="logout.php">Logout</a></div> -->
          </form>

        </div>
      <?php
      }
      ?>
      <h1>Selamat Datang di MakanYuk!</h1>
      <h2>Khusus pemesanan makanan dengan harga yang sangat terjangkau</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/clients/fyi.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/clients/itv.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/clients/bit.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
            <img src="assets/img/clients/byu.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
            <img src="assets/img/clients/upscale.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
            <img src="assets/img/clients/dewa.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2>MakanYuk!</h2>
            <h4>Didukung oleh Bit Academy dan dewaweb</h4>
            <h4>Disponsori oleh by.U dan UPSCALE</h4>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p style="text-align: justify;">
              MakanYuk! merupakan website untuk memesan makanan khas dan kudapan khas Indonesia. Dengan MakanYuk! kamu
              bisa mencoba makanan khas daerah yang sulit ditemukan. Tanpa harus pergi ke suatu daerah, kamu bisa memesan lewat
              MakanYuk!
            </p>
            <p>Manfaat yang kamu dapatkan jika memesan melalui MakanYuk!:</p>
            <ul>
              <li><i class="ri-check-double-line"></i> Pesan makanan sangat mudah</li>
              <li><i class="ri-check-double-line"></i> Bisa menikmati makanan khas daerah tanpa harus pergi ke daerah tersebut</li>
              <li><i class="ri-check-double-line"></i> Cepat, banyak, dan murah</li>
            </ul>
            <p class="fst-italic">
              MakanYuk! akan memberikan kamu promo pada tanggal 1-15 Desember 2021.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>Kumpulan</h2>
          <p>Kumpulan makanan yang ada di MakanYuk!. Mulai dari makanan khas daerah di Indonesia dan kudapan yang ada di Indonesia.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Makanan</li>
              <li data-filter=".filter-card">Kudapan</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rendang.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Rendang</h4>
                <p>Sumatera Barat</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/rendang.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rendang"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/gethuk.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gethuk</h4>
                <p>Jawa Tengah dan Jawa Timur</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/gethuk.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Gethuk"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/ketoprak.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ketoprak</h4>
                <p>DKI Jakarta</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/ketoprak.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ketoprak"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/serabi-solo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Serabi Solo</h4>
                <p>Jawa Tengah</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/serabi-solo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Serabi Solo"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/gudeg.jfif" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gudeg</h4>
                <p>Jawa Tengah</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/gudeg.jfif" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Gudeg"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/klepon.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Klepon</h4>
                <p>Jawa</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/klepon.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Klepon"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/sate-padang.jfif" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sate Padang</h4>
                <p>Sumatera Barat</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/sate-padang.jfif" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sate Padang"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/lemper.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lemper</h4>
                <p>Jawa Tengah</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/lemper.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lemper"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/nasi-liwet.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nasi Liwet</h4>
                <p>Jawa Tengah</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/nasi-liwet.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Nasi Liwet"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Kontak</h2>
              <p>Restoran kami berdekatan dengan wisata yang ada di Solo. Dengan wilayah yang sangat strategis membuat kami sangat termotivasi untuk mengembangkan website kami yaitu MakanYuk!</p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1977.5642743926228!2d110.85494160803027!3d-7.560960339746791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14234667a3fd%3A0xbda63b32997616ad!2sSebelas%20Maret%20University!5e0!3m2!1sen!2sid!4v1636764690578!5m2!1sen!2sid" width="100%" height="340" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="info mt-4">
              <i class="bi bi-geo-alt"></i>
              <h4>Lokasi:</h4>
              <p>B405, Surakarta, Jawa Tengah</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@makanyuk.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="bi bi-phone"></i>
                  <h4>Telepon:</h4>
                  <p>(0271) 31834010</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MakanYuk!</h3>
            <p>
              B405 <br>
              Surakarta, Jawa Tengah<br>
              Indonesia <br><br>
              <strong>Telepon:</strong> (0271) 31834010<br>
              <strong>Email:</strong> info@makanyuk.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>MakanYuk</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/diaslanjarr" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.instagram.com/diaslanjar/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/diaslanjar/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>