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

    <title>Register | KBS Project</title>

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
          <h1 class="h3 mb-3 font-weight-normal">Register</h1>
        </div>

        <div class="form-label-group">
          <input type="text" id="inputFullname" class="form-control" placeholder="Full name" name="fullname" required autofocus>
          <label for="inputFullname">Your Name</label>
        </div>

        <div class="form-label-group">
          <input type="text" id="inputPhoneNumber" class="form-control" placeholder="Phone Number" name="phone_number" required>
          <label for="inputPhoneNumber">Phone Number</label>
        </div>


        <div class="form-group">
          <label for="inputGender">Gender</label><br>
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="maleRadio" name="gender" class="custom-control-input" value="male">
            <label class="custom-control-label" for="maleRadio">Male</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="femaleRadio" name="gender" class="custom-control-input" value="female">
            <label class="custom-control-label" for="femaleRadio">Female</label>
          </div>
        </div>

        <div class="form-label-group">
          <input type="text" id="inputJob" class="form-control" placeholder="Job" name="job" required>
          <label for="inputJob">Job</label>
        </div>

        <div class="form-label-group">
          <input type="number" id="inputAge" class="form-control" placeholder="Age" name="age" required>
          <label for="inputAge">Age</label>
        </div>

        <div class="form-label-group">
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email_address" required>
          <label for="inputEmail">Email address</label>
        </div>

        <div class="form-label-group">
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
          <label for="inputPassword">Password</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block mb-3" type="submit" name="register">Register</button>
        <a href="/KBS/auth/login.php">Login Page</a>
        <p class="mt-3 mb-3 text-muted text-center">&copy; 2019</p>
      </form>
    </div>    
  </body>
</html>
