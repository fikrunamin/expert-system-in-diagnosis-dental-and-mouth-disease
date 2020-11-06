<?php 
require_once '../config.php';
require_once 'template/header.php'; 

$current_date = date("Y-m-d H:i:s");
$seven_days_ago = strtotime("-1 week");
$seven_days_ago = date("Y-m-d H:i:s", $seven_days_ago);

$sql = "SELECT reports.report_id, users.fullname, users.phone_number, users.email_address, users.job, users.age, reports.disease, reports.disease, reports.symptoms, reports.treatments, reports.created_at FROM users JOIN reports ON users.user_id=reports.user_id WHERE created_at BETWEEN :seven_days_ago and :current_date ORDER BY `created_at` DESC";
$stmt = $db->prepare($sql);

$params = array(
    ":current_date" => $current_date,
    ":seven_days_ago" => $seven_days_ago
);

$stmt->execute($params);

$data['report'] = $stmt->fetchAll();
?>

<h2 class="mb-3">Saved Reports Current Week</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Report ID</th>
      <th scope="col">Fullname</th>
      <th scope="col">Disease</th>
      <th scope="col">Created At</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data['report'] as $report): ?>
    <tr>
      <td><?= $report['report_id'] ?></td>
      <td><?= $report['fullname'] ?></td>
      <td><?= $report['disease'] ?></td>
      <td><?= $report['created_at'] ?></td>
      <td>
      	<a href="report.php?report=<?= $report['report_id'] ?>" class="btn btn-sm btn-primary">See Report</a>
      </td>
    </tr>
  	<?php endforeach ?>
  </tbody>
</table>

<?php require_once 'template/footer.php'; ?>