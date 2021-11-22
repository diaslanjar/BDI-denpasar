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
                        <li><a class="nav-link scrollto active" href="index.php">Beranda</a></li>
                        <li><a class="nav-link scrollto" href="index.php#about">Tentang Kami</a></li>
                        <li><a class="nav-link scrollto" href="index.php#contact">Kontak</a></li>
                        <li><a class="getstarted scrollto" href="create.php">Pesan Sekarang</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div><!-- End Header Container -->
        </div>
    </header><!-- End Header -->

    <section id="clients" class="clients">
        <br><br>
        <div class="container mt-5">
            <?php
            $status = $_GET['status'];
            if ($status == 'success_tambah') {
                echo '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>';
            } else if ($status == 'success_ubah') {
                echo '<div class="alert alert-success" role="alert">Data berhasil diubah</div>';
            } else if ($status == 'success_hapus') {
                echo '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Data gagal diproses</div>';
            }
            ?>
            <table class="table table-bordered" style="text-align: center;">
                <tr class="table-secondary">
                    <th>IDMakanan</th>
                    <th>Nama Makanan</th>
                    <th>Harga Makanan</th>
                    <th>Aksi</th>
                </tr>

                <?php
                $query = "SELECT * FROM resto";

                if ($query = mysqli_query($koneksi, $query)) {
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                        <tr>
                            <td><?php print_r($data['id_resto']) ?></td>
                            <td><?php print_r($data['nama_makanan']) ?></td>
                            <td><?php print_r($data['harga_makanan']) ?></td>
                            <td>
                                <a href="edit.php?id_resto=<?php echo $data['id_resto']; ?>" class="btn btn-primary">Ubah</a>
                                <a onclick="validasi(<?php echo $data['id_resto'] ?>)" href='#' class='btn btn-danger'>Hapus</a>
                            </td>
                        </tr> <?php
                            }
                        } else {
                            print_r($data);
                        }
                                ?>
            </table>
            <div class="form-group text-center">
                <a href="create.php" class="btn btn-md float-left btn-danger">Pesan Lagi</a>
                <a href="bayar.php"><button type="button" class="btn btn-md float-right btn-success">Lanjutkan Pembayaran</button>
                </a>
            </div>
        </div>
    </section>
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Bethany</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Bethany</span></strong>. All Rights Reserved
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
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validasi(param) {
            Swal.fire({
                title: 'Yakin mau hapus?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Saya Ingin Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "delete.php?id_resto=" + param;
                } else {
                    swal("Data anda aman!");
                }
            })

        }
    </script>

</body>

</html>