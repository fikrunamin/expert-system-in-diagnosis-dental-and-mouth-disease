<?php require_once('template/header.php') ?>
<img src="img/tooth_1.png" width="150px">
<div class="animated fadeInDown mt-3">
	<h1 class="cover-heading">Welcome, <?= $_SESSION['login']['fullname'] ?>.</h1>
	<p class="lead">Expert System for Dental and Mouth Diseases Diagnosis uses rule-based reasoning, that is, reasoning that uses a specific sequence to get final conclusions. So to get a conclusion, we need a certain checking method to trace a series of rules or rules that already exist.</p>
	<p class="lead">
		<a href="/KBS/agreement.php" class="btn btn-lg btn-primary">Start Consultation</a>
	</p>
</div>

<?php require_once('template/footer.php') ?>