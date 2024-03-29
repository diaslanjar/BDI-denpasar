<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakanYuk!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once('config.php');
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h2 style="text-align: center;">Halaman Form Tambah Pesanan</h2>
                <?php
                $parameter = $_GET['id_makanan'];
                $query = "SELECT * FROM makanan WHERE id_makanan =" . $parameter;

                if ($query = mysqli_query($koneksi, $query)) {
                    $row = $query->fetch_assoc();

                    // print_r($row);
                } else {
                    //code
                }

                ?>
                <br>
                <form action="update.php?id_makanan=<?php echo $parameter; ?>" method="POST">
                    <div class="form-group">
                        <label>Nama Makanan</label>
                        <input type="text" name="nama_makanan" id="nama_makanan" class="form-control" value="<?php echo $row['nama_makanan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga_makanan" id="harga_makanan" class="form-control" value="<?php echo $row['harga_makanan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Makanan</label>
                        <input type="text" name="jumlah_makanan" id="jumlah_makanan" class="form-control" value="<?php echo $row['jumlah_makanan']; ?>">
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <a href="index.php" class="btn btn-md float-left btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-md float-right btn-success">Submit</button>
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