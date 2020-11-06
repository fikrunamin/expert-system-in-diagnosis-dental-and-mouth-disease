<?php  
require_once 'template/header.php';
require_once '../config.php';

$sql = "SELECT * FROM diseases";
$stmt = $db->prepare($sql);

$stmt->execute();

$data['diseases'] = $stmt->fetchAll();
?>

<h2 class="mb-3">List of System Diseases</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Disesase ID</th>
      <th scope="col">Disease Name</th>
      <th scope="col">Disease Description</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data['diseases'] as $diseases): ?>
    <tr>
      <td><?= strtoupper($diseases['disease_id']) ?></td>
      <td><?= $diseases['disease_name'] ?></td>
      <td><?= $diseases['disease_desc'] ?></td>
    </tr>
  	<?php endforeach ?>
  </tbody>
</table>

<?php require_once 'template/footer.php'; ?>