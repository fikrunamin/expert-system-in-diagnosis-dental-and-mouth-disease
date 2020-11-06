<?php  
require_once 'template/header.php';
require_once '../config.php';

$sql = "SELECT * FROM treatments";
$stmt = $db->prepare($sql);

$stmt->execute();

$data['treatments'] = $stmt->fetchAll();
?>

<h2 class="mb-3">List of System Treatments</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Treatment ID</th>
      <th scope="col">Treatment Description</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data['treatments'] as $treatments): ?>
    <tr>
      <td><?= strtoupper($treatments['treatment_id']) ?></td>
      <td><?= $treatments['treatment_desc'] ?></td>
    </tr>
  	<?php endforeach ?>
  </tbody>
</table>

<?php require_once 'template/footer.php'; ?>