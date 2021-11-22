<?php echo $this->extend('layouts/master.php') ?>

<?php echo $this->section('content') ?>
<div id="content">

	<!-- Topbar -->
	<?php echo $this->include('layouts/navbar.php')?>
	<!-- End of Topbar -->

	<!-- Begin Page Content -->
	<div class="container">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">Pegawai</h1>
		<table class="table table-dark" style="text-align:center">
			<tr>
				<th>IDPegawai</th>
				<th>Nama Pegawai</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No. HP</th>
				<th>Email</th>
				<th>Aksi</th>
			</tr>
			<?php
			foreach ($data as $i => $d) {
			?>
				<tr>
					<td class="text-center"><?= $i + 1 ?></td>
					<td><?= $d['nama']; ?></td>
					<td><?= $d['jenis_kelamin']; ?></td>
					<td><?= $d['alamat']; ?></td>
					<td><?= $d['telpon']; ?></td>
					<td><?= $d['email']; ?></td>
					<td>
						<a href="<?php echo base_url('paket/edit/' . $d['id']) ?>" class="btn btn-primary">Edit</a>
						<a href="<?php 	echo base_url('paket/delete/' . $d['id']) ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php
			}
			?>
		</table>

	</div>
	<!-- /.container-fluid -->

</div>
<?php echo $this->endSection('content') ?>