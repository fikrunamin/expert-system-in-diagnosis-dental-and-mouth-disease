<?php 
require_once '../config.php';
require_once 'template/header.php'; 

if (isset($_POST['update_profile'])) {
	$user_id = $_SESSION['login']['user_id'];
	$fullname = $_POST['fullname'];
	$phone_number = $_POST['phone_number'];
	$email_address = $_POST['email_address'];

	if ($_POST['password'] != "") {
		$password = password_hash($_POST['password']);
	}

	$job = $_POST['job'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];

	$sql = "UPDATE users SET fullname=:fullname, phone_number=:phone_number, email_address=:email_address, job=:job, gender=:gender, age=:age WHERE user_id=:user_id";
    $stmt = $db->prepare($sql);

    $params = array(
        ":user_id" => $user_id,
        ":fullname" => $fullname,
        ":phone_number" => $phone_number,
        ":email_address" => $email_address,
        ":job" => $job,
        ":gender" => $gender,
        ":age" => $age
    );

    $saved = $stmt->execute($params);

    $sql = "SELECT * FROM users WHERE email_address=:email_address";
    $stmt = $db->prepare($sql);
    
    $params = array(
        ":email_address" => $email_address,
    );

    $stmt->execute($params);

    $updated_user = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION["login"] = $updated_user;

    if($updated_user) header("Location: /KBS/dashboard/editprofile.php");
}
?>

<h2>Your Profile</h2><br>
<div class="row">
	<div class="col-3">
		<form class="form-signin" action="" method="POST">
		  <div class="form-group">
		    <label for="inputFullname">Your Name</label>
		    <input type="text" id="inputFullname" class="form-control" placeholder="Full name" name="fullname" value="<?= $_SESSION['login']['fullname']?>" required autofocus>
		  </div>
		  <div class="form-group">
		    <label for="inputPhoneNumber">Phone Number</label>
		    <input type="text" id="inputPhoneNumber" class="form-control" placeholder="Phone Number" name="phone_number" value="<?= $_SESSION['login']['phone_number']?>" required>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail">Email address</label>
		    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email_address" value="<?= $_SESSION['login']['email_address']?>" required>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword">Password</label>
		    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
		  </div>
		  <div class="form-group">
		    <label for="inputJob">Job</label>
		    <input type="text" id="inputJob" class="form-control" placeholder="Job" name="job" value="<?= $_SESSION['login']['job']?>" required>
		  </div>
		  <div class="form-group">
		    <label for="inputGender">Gender</label><br>

		    <?php if ($_SESSION['login']['gender'] = "male"): ?>
			  	<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="maleRadio" name="gender" class="custom-control-input" value="male" checked>
				  <label class="custom-control-label" for="maleRadio">Male</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="femaleRadio" name="gender" class="custom-control-input" value="female">
				  <label class="custom-control-label" for="femaleRadio">Female</label>
				</div>
			<?php else: ?>
		    	<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="maleRadio" name="gender" class="custom-control-input" value="male">
				  <label class="custom-control-label" for="maleRadio">Male</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="femaleRadio" name="gender" class="custom-control-input" value="female" checked>
				  <label class="custom-control-label" for="femaleRadio">Female</label>
				</div>
		    <?php endif ?>
		  </div>

		  <div class="form-group">
		    <label for="inputAge">Age</label>
		    <input type="number" id="inputAge" class="form-control" placeholder="Age" name="age" value="<?= $_SESSION['login']['age']?>" required>
		  </div>
		  <button type="submit" class="btn btn-primary" name="update_profile">Update</button>
		</form>
	</div>
</div>

<?php require_once 'template/footer.php'; ?>