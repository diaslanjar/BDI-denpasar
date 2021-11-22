<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h2 style="text-align: center;">Form Tambah Data Paket Wisata</h2>
                <br>
                <form action="<?php echo base_url('paket/store') ?>" method="POST">
                    <div class="form-group">
                        <label>Nama Paket</label>
                        <input type="text" name="nama_paket" id="nama_paket" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga Paket</label>
                        <input type="text" name="harga_paket" id="harga_paket" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kota Wisata</label>
                        <input type="text" name="kota_wisata" id="kota_wisata" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Fasilitas</label>
                        <input type="text" name="fasilitas" id="fasilitas" class="form-control">
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <a href="<?php echo base_url('/paket') ?>" class="btn btn-md float-left btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-md float-right btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</html>