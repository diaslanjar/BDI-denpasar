<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php echo $this->extend('layouts/master.php') ?>

<?php echo $this->section('content') ?>
<div id="content">

    <!-- Topbar -->
    <?php echo $this->include('layouts/navbar.php') ?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Jenis Cuti</h1>
        <div class="card">
            <div class="card-body">
                <h2 style="text-align: center;">Tambah Jenis Cuti</h2>
                <br>
                <form action="<?php echo base_url('jeniscuti/store') ?>" method="POST">
                    <div class="form-group">
                        <label>Nama Jenis Cuti</label>
                        <input type="text" name="nama_jenis" id="nama_jenis" class="form-control">
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <a href="<?php echo base_url('/jeniscuti') ?>" class="btn btn-md float-left btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-md float-right btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center">
            <a href="<?php echo base_url('/jeniscuti/create') ?>">
                <br><button type="button" class="btn btn-warning">Tambah Jenis Cuti</button>
            </a>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<?php echo $this->endSection('content') ?>