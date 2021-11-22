<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakanYuk!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once('config.php');
    ?>

    <div class="container">
    <?php
    $status = $_GET['status'];
    if ($status == 'success_tambah'){
        echo '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>';
    }else if ($status == 'success_ubah'){
        echo '<div class="alert alert-success" role="alert">Data berhasil diubah</div>';
    }else if ($status == 'success_hapus'){
        echo '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>';
    } else{
        echo '<div class="alert alert-danger" role="alert">Data gagal diproses</div>';
    }
    ?>

        <h3 style="text-align: center;">Selamat Datang di<br>MakanYuk!</h3><br>
        <table class="table table-bordered" style="text-align: center;">
            <tr class="table-secondary">
                <th>IDMakanan</th>
                <th>Nama Makanan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>

            <?php
        $query = "SELECT * FROM makanan";

        if ($query = mysqli_query($koneksi, $query)) {
            while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php print_r($data['id_makanan'])?></td>
                <td><?php print_r($data['nama_makanan'])?></td>
                <td><?php print_r($data['harga_makanan'])?></td>
                <td><?php print_r($data['jumlah_makanan'])?></td>
                <td>
                    <a href="edit.php?id_makanan=<?php echo $data['id_makanan'];?>" class="btn btn-warning"><span class="iconify" data-icon="clarity:edit-line"></span> Edit</a>
                    <a onclick="validasi(<?php echo $data['id_makanan'] ?>)" href='#' class='btn btn-danger'>Delete</a>
                </td>
            </tr> <?php
            }
        } else {
            print_r($data);
        }
        ?>
        </table>
        <div class="text-center">
        <a href="create.php">
            <br><button type="button" class="btn btn-success"><span class="iconify" data-icon="bi:plus-square"></span> Tambah Pesanan</button>
        </a>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
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
                    window.location.href = "delete.php?id_makanan=" + param;
                } else {
                    swal("Data anda aman!");
                }
            })

        }
    </script>
</html>