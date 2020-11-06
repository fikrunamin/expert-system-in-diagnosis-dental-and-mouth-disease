<?php 
require_once('template/header.php');
if (!isset($_SESSION['evidence'])):
?>

<h1 class="display-4 mb-5">Health Report</h1>
<p class="lead">Current report is not found. Please do consultation on home page first. Thank you.</p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
<?php die(); endif ?>


<h1 class="display-4 mb-5 mt-5">Health Report</h1>
<div id="report" class="animated fadeInDown text-left">
	<h4>Patient Data</h4>
	<ul class="list-group list-group-flush mb-5">
		<li class="list-group-item"><span class="font-weight-bold">Name:</span> <?=  $_SESSION['login']['fullname']?></li>
		<li class="list-group-item"><span class="font-weight-bold">Email address</span>: <?=  $_SESSION['login']['email_address']?></li>
		<li class="list-group-item"><span class="font-weight-bold">Phone Number</span>: (+60) <?=  $_SESSION['login']['phone_number']?></li>
		<li class="list-group-item"><span class="font-weight-bold">Age</span>: <?=  $_SESSION['login']['age']?></li>
		<li class="list-group-item"><span class="font-weight-bold">Job</span>: <?=  $_SESSION['login']['job']?></li>
	</ul>

	<h4>Disease Analysis</h4>
	<ul class="list-group list-group-flush">
		<li class="list-group-item"><span class="font-weight-bold">Disease</span>: <?= $_SESSION['disease'] ?></li>
		<li class="list-group-item">
			<span class="font-weight-bold">Symptoms</span>:
			<div class="col-9">
				<?php
					if(count($_SESSION['evidence']) === 0) { 
						echo "No symptom detected.";

					}
					else{
						$j=1;
						for ($i=1; $i <= 37; $i++) { 
							if (isset($_SESSION['evidence'][$i])) {
								echo $j . ". " . $_SESSION['evidence'][$i]['symptom_desc'] . "<br>";
								$j++;
							}
						}
					}
				 ?>			 	
			 </div>
		</li>
		<li class="list-group-item">
			<span class="font-weight-bold">Definition</span>: 
			<div class="col"><?= $_SESSION['definition'] ?></div>
		</li>
		<li class="list-group-item">
			<span class="font-weight-bold">Treatment</span>: 
			<div class="col"><?= $_SESSION['treatment'] ?></div>
		</li>
	</ul>
	<a href="/KBS" class="btn btn-md btn-outline-secondary">Back to home</a>
	<button class="btn btn-md btn-primary mb-5 mt-5" onclick="window.print()">Print the report</button>
</div>

<?php require_once('template/footer.php');?>
