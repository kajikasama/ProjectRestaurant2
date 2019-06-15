<html>
	<head>
		<title>Book Data</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
			body
			{
				margin-top: 100px;
			}
		</style>
	</head>
	<body>
		<div class="container">
				<?php
				include "../proses/koneksi.php";
				$kode = $_GET['kode']; 
				$muncul = mysqli_query($konek, "select * from book where id='$kode'");
				while($hasil = mysqli_fetch_array($muncul))
				{
					$id = $hasil[0];
					$nama = $hasil[1];
					$email = $hasil[2];
					$telp = $hasil[3];
					$adult = $hasil[4];
					$child = $hasil[5];
					$checkin = $hasil[6];
					$checkout = $hasil[7];
					$comment = $hasil[8];

					echo "
					<h4>Data Dari : $nama </h4>
			<table class='table table-bordered table-striped'>
						<tr>
					<td>Id</td>
					<td>:</td>
					<td>$id</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td>$nama</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td>$email</td>
				</tr>
				<tr>
					<td>Telp</td>
					<td>:</td>
					<td>$telp</td>
				</tr>
				<tr>
					<td>Adult No.</td>
					<td>:</td>
					<td>$adult</td>

				</tr>
				<tr>
					<td>Child No.</td>
					<td>:</td>
					<td>$child</td>

				</tr>
				<tr>
					<td>Check In</td>
					<td>:</td>
					<td>$checkin</td>

				</tr>
				<tr>
					<td>Check Out</td>
					<td>:</td>
					<td>$checkout</td>

				</tr>
				<tr>
					<td>Comment</td>
					<td>:</td>
					<td>$comment</td>

				</tr>

					";
				}
				?>
			</table>
			<a href="book-data.php" class="btn btn-lg btn-danger">Kembali</a>
			<a href="#" class="btn btn-lg btn-success">Balas</a>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
		<!-- <script src="https://fengyuanchen.github.io/js/common.js"></script> -->
		<!-- <script src="js/datepicker.js"></script>
		<script src="js/main.js"></script> -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>