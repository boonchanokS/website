<?php
session_start();
if($_SESSION['Status']=="user") {
	header("Location: ../login/login.php");
	exit;
}
?>