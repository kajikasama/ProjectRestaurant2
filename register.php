<?php
                // $nama = $_SESSION['user'];
                // echo "$nama";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Register The night market</title>
		<link rel="shortcut icon" href="icon/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/register.css">
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-sm-offset-0">
					<!-- Kotak nya -->
					<h2 class="text-center">Register The Night Market Account</h2>
					<section class="kotak">
						<div class="row">
							<div class="col-sm-4 loginkiri img-responsive">
							</div>
							<div class="col-sm-4 loginkanan img-responsive">
								<form action="cek-register.php">
									<div class="form-group">
										<label for="username1">Username</label>
										<input type="text" class="form-control" placeholder="Username .." id="username1" >
									</div>
									<div class="form-group">
										<label for="password1">Password</label>
										<input type="password" class="form-control" placeholder="Password .." id="password1" >
									</div>
									<div class="form-group">
										<label for="username1">Nis</label>
										<input type="text" class="form-control" placeholder="Nis .." id="username1" >
									</div>
									<div class="form-group">
										<label for="notelp">No Telepon</label>
										<input type="text" class="form-control" placeholder="No Telp .." id="notelp">
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-md btn-success" value="Login">
									</div>
								</form>
								<form action="login.php">
									<div class="form-group">
										<input type="submit" class="btn btn-md btn-danger" value="Back To Login">
									</div>
								</form>
							</div>
						</div>
					</section>
					<!-- akhir dari segalannya -->
				</div>
			</div>
		</div>
		<footer>
			<h6 class="text-center">Copy right &copy; 2018 Agus Chandra | Kajika Sama</h4>
		</footer>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/login.js"></script>
	</body>
</html>