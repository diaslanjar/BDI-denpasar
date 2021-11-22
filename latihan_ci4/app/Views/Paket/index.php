<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h3 style="text-align:center">Paket Wisata 2021</h3><br>
        <table class="table table-bordered" style="text-align:center">
            <tr class="table-secondary">
                <th>IDPaket</th>
                <th>Nama Paket</th>
                <th>Harga Paket</th>
                <th>Kota Wisata</th>
                <th>Fasilitas</th>
                <th>Aksi</th>
            </tr>
            <?php
            foreach ($data as $i => $d) {
            ?>
                <tr>
                    <td class="text-center"><?= $i + 1 ?></td>
                    <td><?= $d['nama_paket']; ?></td>
                    <td><?= $d['harga_paket']; ?></td>
                    <td><?= $d['kota_wisata']; ?></td>
                    <td><?= $d['fasilitas']; ?></td>
                    <td>
                        <a href="<?php echo base_url('paket/edit/' . $d['id']) ?>" class="btn btn-primary">Ubah</a>
                        <a href="<?php echo base_url('paket/delete/' . $d['id']) ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <div class="text-center">
            <a href="<?php echo base_url('/paket/create') ?>">
                <br><button type="button" class="btn btn-success">Tambah Wisata</button>
            </a>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>