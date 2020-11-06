<?php  
require_once 'template/header.php';
require_once '../config.php';

$sql = "SELECT * FROM symptoms";
$stmt = $db->prepare($sql);

$stmt->execute();

$data['symptoms'] = $stmt->fetchAll();
?>

<h2 class="mb-3">List of System Symptoms</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Symptom ID</th>
      <th scope="col">Symptom Description</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data['symptoms'] as $symptoms): ?>
    <tr>
      <td><?= strtoupper($symptoms['symptom_id']) ?></td>
      <td><?= $symptoms['symptom_desc'] ?></td>
    </tr>
  	<?php endforeach ?>
  </tbody>
</table>

<?php require_once 'template/footer.php'; ?>