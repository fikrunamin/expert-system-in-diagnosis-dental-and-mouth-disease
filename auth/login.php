<?php
session_start();
if (isset($_SESSION['login'])) header("Location: /KBS/dashboard");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Expert System to Diagnose Dental and Oral Health">

    <title>Login | KBS Project</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/auth.css" rel="stylesheet">
  </head>

  <body>
    <div class="col img-bg"></div>
      <div class="col">
        <form class="form-signin" action="/KBS/auth/auth_process.php" method="POST">
          <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
          </div>

          <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email_address" required autofocus>
            <label for="inputEmail">Email address</label>
          </div>

          <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
            <label for="inputPassword">Password</label>
          </div>

          <button class="btn btn-lg btn-primary btn-block mb-3" type="submit" name="login">Login</button>
          <a class="" href="/KBS/auth/register.php">Register Page</a>
          <p class="mt-3 mb-3 text-muted text-center">&copy; 2019</p>
        </form>
      </div>
  </body>
</html>
