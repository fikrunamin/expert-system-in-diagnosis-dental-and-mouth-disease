<?php 
require_once '../config.php';
require_once('template/header.php');

$sql = "SELECT reports.report_id, users.fullname, users.phone_number, users.email_address, users.job, users.age, reports.disease, reports.disease, reports.symptoms, reports.treatments, reports.definitions, reports.created_at FROM users JOIN reports ON users.user_id=reports.user_id WHERE reports.report_id=" . $_GET['report'];
$stmt = $db->prepare($sql);

$stmt->execute();

$data['report'] = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<h1 class="display-4 mb-5">Health Report</h1>
<div id="report" class="animated fadeInDown text-left">
	<h4>Patient Data</h4>
	<ul class="list-group list-group-flush mb-5">
		<li class="list-group-item"><span class="font-weight-bold">Name:</span> <?=  $data['report']['fullname']?></li>
		<li class="list-group-item"><span class="font-weight-bold">Email address</span>: <?=  $data['report']['email_address']?></li>
		<li class="list-group-item"><span class="font-weight-bold">Phone Number</span>: (+60) <?=  $data['report']['phone_number']?></li>
		<li class="list-group-item"><span class="font-weight-bold">Age</span>: <?=  $data['report']['age']?></li>
		<li class="list-group-item"><span class="font-weight-bold">Job</span>: <?=  $data['report']['job']?></li>
	</ul>

	<h4>Disease Analysis</h4>
	<ul class="list-group list-group-flush">
		<li class="list-group-item"><span class="font-weight-bold">Disease</span>: <?= $data['report']['disease'] ?></li>
		<li class="list-group-item">
			<span class="font-weight-bold">Symptoms</span>:
			<div class="col-9">
				<?= $data['report']['symptoms'] ?>
			 </div>
		</li>
		<li class="list-group-item">
			<span class="font-weight-bold">Definition</span>: 
			<div class="col"><?= $data['report']['definitions'] ?></div>
		</li>
		<li class="list-group-item">
			<span class="font-weight-bold">Treatment</span>: 
			<div class="col"><?= $data['report']['treatments'] ?></div>
		</li>
	</ul>
	<a href="/KBS/dashboard" class="btn btn-md btn-outline-secondary">Back to dashboard</a>
	<button class="btn btn-md btn-primary mb-5 mt-5" onclick="window.print()">Print the report</button>
</div>

<?php require_once('template/footer.php');?>
