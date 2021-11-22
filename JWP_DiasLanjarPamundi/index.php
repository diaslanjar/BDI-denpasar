<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MyMath</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="hero-image">
    <div class="hero-text">
      <h1 style="font-size:50px">MyMath</h1>
      <p>Hitung Bangun Datar Sangat Mudah</p>
      <a href="#hitung"><button type="button" class="btn btn-light">Mulai hitung</button></a>
    </div>
  </div>
  <div class="conatiner mt-5 pl-5 pr-5" id="hitung">
    <div class="row">
      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Segitiga</h5>
            <img src="sgt.png" alt="segtiga">
            <p class="card-text">Klik tombol dibawah untuk menghitung bangun Segitiga</p>
            <a href="segitiga.php" class="btn btn-primary">Hitung</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Persegi</h5>
            <img src="pers.png" alt="Persegi">
            <p class="card-text">Klik tombol dibawah untuk menghitung bangun Persegi</p>
            <a href="persegi.php" class="btn btn-primary">Hitung</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Lingkaran</h5>
            <img src="ling.png" alt="lingkaran">
            <p class="card-text">Klik tombol dibawah untuk menghitung bangun Lingkaran</p>
            <a href="lingkaran.php" class="btn btn-primary">Hitung</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <?php
  if (($open = fopen("hasil.csv", "r")) !== FALSE) {
    $array = array();
    $max = 0;
    $min = 0;
    $total = 0;
    $persegi = 0;
    $segitiga = 0;
    $lingkaran = 0;
    $i = 0;
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
      if (!empty($data['6'])) {
        $array[] = $data;
        if ($data['6'] >= $max) {
          $max = $data['6'];
        }
        if ($data['6'] <= $min || $i == 0) {
          $min = $data['6'];
        }
        $total += $data['6'];
        if ($data['1'] == 'Persegi') {
          $persegi += $data['6'];
        }
        if ($data['1'] == 'Segitiga') {
          $segitiga += $data['6'];
        }
        if ($data['1'] == 'Lingkaran') {
          $lingkaran += $data['6'];
        }
        $i++;
      }
    }

    fclose($open);
    $persen_persegi = ($persegi > 0) ? number_format((($persegi / $total) * 100), 2) : 0;
    $persen_segitiga = ($segitiga > 0) ? number_format((($segitiga / $total) * 100), 2) : 0;
    $persen_lingkaran = ($lingkaran > 0) ? number_format((($lingkaran / $total) * 100), 2) : 0;
  }
  ?>
  <div class="container">

    <div class="row">
      <div class="col-4">
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Total Perhitungan</h4>
          <hr>
          <p class="mb-0"><?= count($array) ?></p>
        </div>
      </div>
      <div class="col-4">
        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">Nilai Maksimum</h4>
          <hr>
          <p class="mb-0"><?= $max; ?></p>
        </div>
      </div>
      <div class="col-4">
        <div class="alert alert-warning" role="alert">
          <h4 class="alert-heading">Nilai Minimum</h4>
          <hr>
          <p class="mb-0"><?= $min; ?></p>
        </div>
      </div>
      <div class="col-4">
        <div class="alert alert-info" role="alert">
          <h4 class="alert-heading">Persentase Persegi</h4>
          <hr>
          <p class="mb-0"><?= $persen_persegi; ?>%</p>
        </div>
      </div>
      <div class="col-4">
        <div class="alert alert-info" role="alert">
          <h4 class="alert-heading">Persentase Segitiga</h4>
          <hr>
          <p class="mb-0"><?= $persen_segitiga; ?>%</p>
        </div>
      </div>
      <div class="col-4">
        <div class="alert alert-info" role="alert">
          <h4 class="alert-heading">Persentase Lingkaran</h4>
          <hr>
          <p class="mb-0"><?= $persen_lingkaran; ?>%</p>
        </div>
      </div>
    </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>