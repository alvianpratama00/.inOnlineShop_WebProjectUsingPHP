<?php

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


$k = new PDO("mysql:host=localhost;dbname=onlineshop", "root", "");

$sql = "INSERT INTO users(username, password, role ) VALUES (?, ?,'admin')";

$result = $k->prepare($sql);
$result->execute([$username, $password]);

header('Location: main_admin.php');
?>