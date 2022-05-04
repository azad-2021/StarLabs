<?php 
session_start();
$_SESSION['UserID'];

if (!isset($_SESSION['UserID'])) {
	header('location:/Admin/Login/AdminLogin.php');
}


?>