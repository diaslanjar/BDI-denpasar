<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Paket Wisata</title>
</head>

<body>
	<td>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal-<?= $paket['id'] ?>">
			Ubah
		</button>
	</td>
	<div class="container mt-5" id="editModal-<?= $paket['id'] ?>">
		<div class="card">
			<div class="card-body">
				<h3 style="text-align: center;">Ubah</h3>
				<br>
				<form action="<?= base_url('paket/edit/' . $paket['id']) ?>" method="post">
					<?= csrf_field(); ?>
					<div class="form-group">
						<label>Nama Wisata</label>
						<input type="text" name="nama" id="nama" class="form-control" value="<?= $paket['nama'] ?>" placeholder="Nama Wisata" required>
					</div><br>
					<div class="form-group">
						<label>Nomor HP</label>
						<input type="text" name="nohp" id="nohp" class="form-control" value="<?= $paket['nohp'] ?>" placeholder="Nomor HP" required>
					</div><br>
					<div class="form-group">
						<label>Harga Paket</label>
						<input type="text" name="harga" id="harga" class="form-control" value="<?= $paket['harga'] ?>" placeholder="Harga Paket" required>
					</div><br>
					<div class="form-group">
						<label>Kota Wisata</label>
						<input type="text" name="kota" id="kota" class="form-control" value="<?= $paket['kota'] ?>" placeholder="Kota Wisata" required>
					</div><br>
					<br>
					<div class="form-group text-center">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
				<td>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal-<?= $paket['id'] ?>">
						Ubah
					</button>
				</td>
			</div>
		</div>
	</div>
</body>

</html>