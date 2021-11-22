<?php echo $this->extend('layouts/master.php') ?>

<?php echo $this->section('content') ?>
<div id="content">

	<!-- Topbar -->
	<?php echo $this->include('layouts/navbar.php')?>
	<!-- End of Topbar -->

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

	</div>
	<!-- /.container-fluid -->

</div>
<?php echo $this->endSection('content') ?>