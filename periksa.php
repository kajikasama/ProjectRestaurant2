<?php
	session_start();
include "koneksi.php";
if(isset($_COOKIE['id']) && isset($_COOKIE['key']))
{
	$id2 = $_COOKIE['id'];
	$key2 = $_COOKIE['key'];

	$sudah = mysqli_query($konek, "select * from user where id='$id2'");
	$hasil1 = mysqli_fetch_array($sudah);
	$userdb2 = $hasil1[1];
	if($key2 === hash('sha256', $userdb2))
	{
		$_SESSION['user'] = $userdb2;
	}

}	
if(isset($_SESSION['user']))
{
	echo "<script>location.href='index.php'</script>";
}
else
{
	echo "<script>location.href='login.php'</script>";
}
?>