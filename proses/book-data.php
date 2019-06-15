<html>
	<head>
		<title>Book Data</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<td>Id</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Telp</td>
					<td>Adult No.</td>
					<td>Child No.</td>
					<td>Check In</td>
					<td>Check Out</td>
					<td>Comment</td>
				</tr>
				<?php
					include "../proses/koneksi.php";
					$muncul = mysqli_query($konek, "select * from book");
					while($hasil = mysqli_fetch_array($muncul))
					{
						echo"
						<tr>
									<td><a href='book-data-details.php?kode=$hasil[0]'>
									$hasil[0]</a></td>
									<td>$hasil[1]</td>
									<td>$hasil[2]</td>
									<td>$hasil[3]</td>
									<td>$hasil[4]</td>
									<td>$hasil[5]</td>
									<td>$hasil[6]</td>
									<td>$hasil[7]</td>
									<td>$hasil[8]</td>
						</tr>
						";
					}
				?>
				<!-- Button trigger modal -->
				<!-- Modal -->
				<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel"></h4>
							</div>
							<div class="modal-body">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-success" data-dismiss="modal">Balas</button>
							</div>
						</div>
					</div>
				</div> -->
			</table>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
		<!-- <script src="https://fengyuanchen.github.io/js/common.js"></script> -->
		<!-- <script src="js/datepicker.js"></script>
		<script src="js/main.js"></script> -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>