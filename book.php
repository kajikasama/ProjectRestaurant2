<!DOCTYPE html>
<html>
	<head>
		<title>The Night Market Book Table</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="icon/favicon.ico">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="A simple jQuery datepicker plugin.">
		<meta name="author" content="Chen Fengyuan">
		<title>Datepicker</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/datepicker.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="book.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="books">
			<div class="form">
				<form action="proses/book-proses.php" method="post">
					<h2>A Book Table</h2>
					<p>Your Name</p>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-user"></i></span>
						<input name="nama" type="text" class="form-control" placeholder="Your Name ..." aria-describedby="sizing-addon2">
					</div>
					<p>E-mail Adress</p>
					<p name="c5">Telephone / Mobile</p>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-envelope"></i></span>
						<input name="email" type="text" class="form-control" placeholder="Your Mail .." aria-describedby="sizing-addon2">
						<span class="input-group-addon" id="sizing-addon2"><i class="fa fa-phone"></i></span>
						<input name="telp" type="text" class="form-control" placeholder="Your telp .." aria-describedby="sizing-addon2">
					</div>
					<p>Adult Number</p>
					<p name="c5">Child Number</p>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2"><i class="fa fa-male"></i></span>
						<input name="adultnum" type="text" class="form-control" placeholder="Adult Number" aria-describedby="sizing-addon2">
						<span class="input-group-addon" id="sizing-addon2"><i class="fa fa-child"></i></span>
						<input name="childnum" type="text" class="form-control" placeholder="Child Number" aria-describedby="sizing-addon2">
					</div>
					<p>Check In Date</p>
					<p name="c5">Check Out Number</p>
					<div class="input-group">
						<input name="checkin" type="text" class="form-control docs-date" placeholder="Pick a date">
						<span class="input-group-btn">
							<button type="button" class="btn btn-default docs-datepicker-trigger" disabled>
							<i class="fa fa-calendar" aria-hidden="true"></i>
							</button>
						</span>
						<input name="checkout" type="text" class="form-control docs-date" placeholder="Pick a date">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-default docs-datepicker-trigger" disabled>
							<i class="fa fa-calendar" aria-hidden="true"></i>
							</button>
						</span>
					</div>
					<p>Your Comments</p>
					<div class="input-group">
						<textarea name="comment" type="text" class="form-control" placeholder="comment something ..."
						rows="4" aria-describedby="sizing-addon2">
						</textarea><br><br><br><br><br><br><br>
						<p><input value="kirim" class="btn btn-lg btn-success" role="button" type="submit">
						<a class="btn-primary btn-lg btn-danger" style="text-decoration: none;" href="index.php">Kembali</a>
					</p>
				</form>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
		<script src="https://fengyuanchen.github.io/js/common.js"></script>
		<script src="js/datepicker.js"></script>
		<script src="js/main.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>