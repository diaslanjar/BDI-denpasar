<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PMI | Tiga Serangkai</title>

    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Tiga Serangkai</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/user">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Kegiatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Peserta</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Unit</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Penugasan</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center">
                <h2 class="text-white font-weight-bold text-center"><br>Ubah Data Unit</h2>
                <form action="<?php echo base_url('unit/update/' . $data['id']) ?>" method="POST">
                    <div class="form-group">
                        <label class="text-white">Nama Unit</label>
                        <input type="text" name="nama_unit" id="nama_unit" class="form-control" value="<?php echo $data['nama_unit'] ?>">
                    </div><br>
                    <div class="form-group">
                        <label class="text-white">Kode Unit</label>
                        <input type="text" name="kode_unit" id="kode_unit" class="form-control" value="<?php echo $data['kode_unit'] ?>">
                    </div><br>
                    <div class="form-group">
                        <label class="text-white">Provinsi Unit</label>
                        <input type="text" name="provinsi_unit" id="provinsi_unit" class="form-control" value="<?php echo $data['provinsi_unit'] ?>">
                    </div><br>
                    <div class="form-group">
                        <label class="text-white">Kota Unit</label>
                        <input type="text" name="kota_unit" id="kota_unit" class="form-control" value="<?php echo $data['kota_unit'] ?>">
                    </div><br>
                    <div class="form-group">
                        <label class="text-white">Alamat Unit</label>
                        <input type="text" name="alamat_unit" id="alamat_unit" class="form-control" value="<?php echo $data['alamat_unit'] ?>">
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <a href="/unit" class="btn btn-md float-left btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-md float-right btn-primary">Ubah</button>
                    </div>
                </form>
                <!-- Footer-->
                <footer>
                    <div class="container px-4 px-lg-5">
                        <div class="small text-center text-white">Copyright &copy; 2021 - PMI Tiga Serangkai</div>
                    </div>
                </footer>
            </div>
        </div>
    </header>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>