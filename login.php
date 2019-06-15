<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login The night market</title>
		<link rel="shortcut icon" href="icon/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-sm-offset-0">
					<!-- Awal Dari Segalanya  -->
					<h2 class="text-center">Login The Night Market Account</h2>
					<section class="kotak">
						<div class="row">
							<div class="col-sm-4 loginkiri img-responsive">
							</div>
							<div class="col-sm-4 loginkanan img-responsive">
								<form method="post" action="ceklogin.php">
									<div class="form-group">
										<label for="username1">Username</label>
										<input name="user" type="text" class="form-control" placeholder="Username .." id="username1" >
									</div>
									<div class="form-group">
										<label for="password1">Password</label>
										<input name="pass" type="password" class="form-control" placeholder="Password .." id="password1" >
									</div>
									<div class="form-group">
										<input type="checkbox" id="remember" name="remember" value="remember" aria-label="...">
										<label for="remember" readonly><p>remember me</p></label>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-md btn-success menghilang" value="Login">
									</div>
								</form>
								<!-- <form action="register.php">
										<div class="form-group">
												<input type="submit" class="btn btn-md btn-info" value="Register Account">
										</div>
								</form> -->
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
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/login.js"></script>
	</body>
</html>