<?php require_once '../auth/auth.php'; ?>
<?php 
  if ($_SESSION['login']['role'] != "admin") {
    header("Location: /KBS");
  }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard | KBS Project</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="" onclick="return false;">Dashboard</a>
      <input id="search_top" class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="/KBS/auth/logout.php">Logout</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="/KBS">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/KBS/dashboard">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="editprofile.php">
                  <span data-feather="file"></span>
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="users.php">
                  <span data-feather="file"></span>
                  Users
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="currentweek.php">
                  <span data-feather="file-text"></span>
                  Current week
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="currentmonth.php">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="alltime.php">
                  <span data-feather="file-text"></span>
                  All time
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>System</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="questions.php">
                  <span data-feather="file-text"></span>
                  Questions
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="symptoms.php">
                  <span data-feather="file-text"></span>
                  Symptoms
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="diseases.php">
                  <span data-feather="file-text"></span>
                  Diseases
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="treatments.php">
                  <span data-feather="file-text"></span>
                  Treatments
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">