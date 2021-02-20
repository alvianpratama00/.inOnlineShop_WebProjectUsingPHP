<?php

session_start();
if($_SESSION['role']=="guest"){
		header("location:main.php");
	}
?>
