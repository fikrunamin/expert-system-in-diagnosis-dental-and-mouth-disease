<?php 
require_once '../config.php';
require_once 'template/header.php'; 

$sql = "SELECT * FROM users";
$stmt = $db->prepare($sql);

$stmt->execute();

$data['user'] = $stmt->fetchAll();

?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Fullname</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Job</th>
      <th scope="col">Age</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data['user'] as $user): ?>
    <tr>
      <td><?= $user['user_id'] ?></td>
      <td><?= $user['fullname'] ?></td>
      <td><?= $user['phone_number'] ?></td>
      <td><?= $user['email_address'] ?></td>
      <td><?= ucfirst($user['gender']) ?></td>
      <td><?= ucfirst($user['job']) ?></td>
      <td><?= $user['age'] ?></td>
      <td><?= ucwords($user['role']) ?></td>
    </tr>
  	<?php endforeach ?>
  </tbody>
</table>

<?php require_once 'template/footer.php'; ?>