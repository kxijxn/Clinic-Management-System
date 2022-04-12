<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: Dr_login.php');
	exit;
}
?>