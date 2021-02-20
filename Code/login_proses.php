<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$k = new PDO("mysql:host=localhost;dbname=onlineshop", "root", "");

$sql = "SELECT * FROM users WHERE username = ?";

$result = $k->prepare($sql);
$result->execute([$username]);

if($row = $result->fetch()){
	if(password_verify($password, $row['password'])){
		$_SESSION['username'] = $row['username'];
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['role'] =$row['role'];
		if($_SESSION['role'] == "guest"){
		header('Location: main.php');
	 	}
	 	if($_SESSION['role'] == "admin"){
		header('Location: main_admin.php');
	 	}
	}
	else{
		
		
		echo "<script>alert('Username atau password salah');window.location='index.html'</script>";
	}
}else{
	echo "<script>alert('Tidak ada data dalam database');window.location='index.html'</script>";
}


?>

