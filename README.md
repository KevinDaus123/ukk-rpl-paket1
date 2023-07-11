<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Login - Sistem Informasi Manajemen Surat Masuk & Keluar</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url('assets') ?>/assets/img/logo-surat.png" rel="icon">
	<link href="<?= base_url('assets') ?>/assets/img/logo-surat.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url('assets') ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url('assets') ?>/assets/vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="<?= base_url('assets') ?>/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="<?= base_url('assets') ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?= base_url('assets') ?>/assets/vendor/simple-datatables/style.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assets') ?>/assets/css/style.css" rel="stylesheet">
</head>

<body>

	<main>
		<div class="container">

			<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

							<div class="d-flex justify-content-center py-4">
								<a href="index.html" class="logo d-flex align-items-center w-auto">
									<img src="<?= base_url('assets') ?>/assets/img/logo-nawala.png" alt="">
									<span class="d-none d-lg-block">NAWALA</span>
								</a>
							</div><!-- End Logo -->

							<div class="card mb-3">

								<div class="card-body">

									<div class="pt-4 pb-2">
										<h5 class="card-title text-center pb-0 fs-4">Masuk ke Sistem</h5>
										<p class="text-center small">SIM Surat Masuk & Keluar</p>
									</div>

									<form class="row g-3 needs-validation" novalidate action="<?= site_url('auth/login') ?>" method="POST">

										<div class="col-12">
											<label for="yourUsername" class="form-label">Username</label>
											<div class="input-group has-validation">
												<span class="input-group-text" id="inputGroupPrepend">@</span>
												<input type="text" name="username" class="form-control" id="yourUsername" required>
												<div class="invalid-feedback">Please enter your username.</div>
											</div>
										</div>

										<div class="col-12">
											<label for="yourPassword" class="form-label">Password</label>
											<input type="password" name="password" class="form-control" id="yourPassword" required>
											<div class="invalid-feedback">Please enter your password!</div>
										</div>

										<?php if ($this->session->flashdata('pesan_gagal')) : ?>
											<small class="text-danger"><?= $this->session->flashdata('pesan_gagal'); ?></small>
										<?php endif; ?>

										<div class="col-12">
											<button class="btn btn-primary w-100" type="submit">Login</button>
										</div>
										<div class="col-12">
											<p class="small mb-0">Belum punya akses ? <a href="#">Kontak Administrator</a></p>
										</div>
									</form>

								</div>
							</div>

							<div class="credits">
								Developed by <a href="#">Maryanto</a>
							</div>

						</div>
					</div>
				</div>

			</section>

		</div>
	</main><!-- End #main -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets') ?>/assets/vendor/apexcharts/apexcharts.min.js"></script>
	<script src="<?= base_url('assets') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets') ?>/assets/vendor/chart.js/chart.umd.js"></script>
	<script src="<?= base_url('assets') ?>/assets/vendor/echarts/echarts.min.js"></script>
	<script src="<?= base_url('assets') ?>/assets/vendor/quill/quill.min.js"></script>
	<script src="<?= base_url('assets') ?>/assets/vendor/simple-datatables/simple-datatables.js"></script>
	<script src="<?= base_url('assets') ?>/assets/vendor/tinymce/tinymce.min.js"></script>
	<script src="<?= base_url('assets') ?>/assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url('assets') ?>/assets/js/main.js"></script>

</body>

</html>
