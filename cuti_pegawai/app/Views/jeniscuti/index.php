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
		<table class="table table-dark" style="text-align:center">
			<tr>
				<th>IDJenisCuti</th>
				<th>Nama Jenis</th>
				<th>Aksi</th>
			</tr>
			<?php
			foreach ($data as $i => $d) {
			?>
				<tr>
					<td class="text-center"><?= $i + 1 ?></td>
					<td><?= $d['nama_jenis']; ?></td>
					<td>
						<a href="<?php echo base_url('paket/edit/' . $d['id']) ?>" class="btn btn-primary">Edit</a>
						<a href="<?php echo base_url('paket/delete/' . $d['id']) ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php
			}
			?>
		</table>
		<div class="text-center">
			<a href="<?php echo base_url('/jeniscuti/create') ?>">
				<br><button type="button" class="btn btn-warning">Tambah Jenis Cuti</button>
			</a>
		</div>

	</div>
	<!-- /.container-fluid -->

</div>
<?php echo $this->endSection('content') ?>