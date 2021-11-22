<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body> 
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card text white">
                    <div class="card-header">
                        <h4 class="card-title text-center">Form Data Diri Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <form action="data.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIM</label>
                                <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM Anda...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Asal Instansi</label>
                                <input type="text" class="form-control" name="asal" placeholder="Asal Universitas/Institut Anda...">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jeniskelamin" class="form-control">
                                    <option selected value="">(Pilih Salah Satu)</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuann</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Kartu Mahasiswa (.pdf)</label>
                                <input type="file" class="form-control-file" name="foto">
                                <small class="form-text text-muted">(File maksimal berukuran 5Mb)</small>
                            </div>
                            <div class="form-gourp">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>