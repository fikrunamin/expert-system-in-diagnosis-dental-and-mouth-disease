<?php  
require_once 'template/header.php';
require_once '../config.php';

$sql = "SELECT * FROM questions";
$stmt = $db->prepare($sql);

$stmt->execute();

$data['questions'] = $stmt->fetchAll();
?>

<h2 class="mb-3">List of System Questions</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Question ID</th>
      <th scope="col">Question</th>
      <th scope="col">Picture</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data['questions'] as $questions): ?>
    <tr>
      <td><?= strtoupper($questions['question_id']) ?></td>
      <td><?= $questions['question'] ?></td>
      <td>
		<img src="../img/<?= $questions['picture'] ?>" width="50px">
	  </td>
    </tr>
  	<?php endforeach ?>
  </tbody>
</table>

<?php require_once 'template/footer.php'; ?>