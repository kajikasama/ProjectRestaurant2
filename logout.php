<?php
	session_start();
	session_destroy();
	setcookie('id', '', time() - 3600);
	setcookie('key', '', time() - 3600);
	echo "<script>location.href='login.php'</script>";
?>