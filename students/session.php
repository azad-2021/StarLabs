<?php 
session_start();
$_SESSION['ID'];

if (!isset($_SESSION['ID'])) {
	header('location:/Admin/Login/StudentLogin.php');
}


?>