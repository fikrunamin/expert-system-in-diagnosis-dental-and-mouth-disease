<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KBS Project</title>

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
  <link href="css/cover.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
</head>

<body class="text-center">

  <div class="container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">KBS Project</h3>
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link" href="/KBS">Home</a>
          <!-- <?php if ($_SESSION['login']['role'] == "admin") : ?> -->
          <!-- <a class="nav-link" href="/KBS/4admin">Dashboard</a> -->
          <!-- <?php else : ?> -->
          <a class="nav-link" href="/KBS/dashboard">Dashboard</a>
          <!-- <?php endif ?> -->
          <a class="nav-link" href="/KBS/report.php">Recent Report</a>
          <a class="nav-link" href="/KBS/auth/logout.php">Logout</a>
        </nav>
      </div>
    </header>
    <main role="main" class="inner cover">