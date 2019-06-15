<?php
error_reporting();
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


	$user1 = $_POST['user'];
	$pass1 = $_POST['pass'];
	$cek = mysqli_query($konek, "select * from user where username='$user1'");
	$hasil = mysqli_fetch_array($cek);
	$iddb = $hasil[0];
	$userdb = $hasil[1];
	$passdb = $hasil[2];
	if(($user1 == $userdb) && ($pass1 == $passdb))
	{
		session_start();
		// session
		$_SESSION['user'] = $user1;
		echo "<script>location.href='index.php'</script>";
		// remember
		if(isset($_POST['remember']))
		{
			setcookie('id', $iddb, time()+100);
			setcookie('key', hash('sha256', $userdb), time()+100);
			echo "<script>location.href='index.php'</script>";
		}
	}
	else
	{
		echo "<script>location.href='login.php'</script>";
	}	
?>