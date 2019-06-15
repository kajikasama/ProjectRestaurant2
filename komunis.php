<?php
	include = "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>comments beta</title>
	<style>
	</style>
</head>
<body>
	<form method="post" action="komunis.php">
		<label for="nama1">Nama :</label>
		<input id="nama1" type="text" name="nama"><br><br>
		<label for="email1">Email :</label>
		<input id="email1" type="text" name="nama"><br><br>
		<label for="comment">Comments :</label>
		<textarea name="comments" id="comment"></textarea><br><br>
		<input type="submit" value="submit comment">
	</form>
</body>
</html>