<?php

session_start();
$_SESSION = [];
session_unset();
if (session_destroy()) {
	header('Location: /KBS/auth/login.php');
	exit;
}
