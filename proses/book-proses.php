<?php
	include "../proses/koneksi.php";
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$telp = $_POST['telp'];
	$adultnum = $_POST['adultnum'];
	$childnum = $_POST['childnum'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$comment = $_POST['comment'];
	$save = mysqli_query($konek, "insert into book values('','$nama','$email','$telp','$adultnum','$childnum','$checkin','$checkout','$comment')");
	if($save)
	{
		echo"<script>
			alert('Data Berhasil Di Simpan');
			location.href='../index.php';
		</script>";
	}
	else
	{
		echo"<script>
		alert('Data Gagal Tersimpan coba lagi');
		location.href='../index.php';
		</script>";
	}
?>