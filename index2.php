<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Admin / Petugas - Aplikasi Pembayaran SPP.</title>
	<link rel="icon" href="Smk Kartika XXI Makassar.png">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container mt-5">
		<div class="row justify-content-md-center">
			<div class="col-md-4">
				<h4 class="text-center">LOGIN ADMIN / PETUGAS</h4>
				<div class="card">
					<div class="card-header">
						<img src="Smk Kartika XXI Makassar.png" width="100%">
					</div>
					<div class="card-body">
						<form action="proses-login-petugas.php" method="post">
							<div class="form-group mb-2">
								<label>Username</label>
								<input type="text" name="username" class="form-control" placeholder="Masukan Username anda.." required>
							</div>
							<div class="form-group mb-2">
								<label>Password</label>
								<input type="password" name="password" class="form-control" placeholder="Masukan Password anda.." required>
							</div>
							<div class="form-group mb-2">
								<button type="submit" class="btn btn-primary"> LOGIN </button>
							</div>
							<a href="index.php"> Login Sebagai Siswa </a>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>