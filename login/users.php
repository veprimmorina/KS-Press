<?php
  require '../includes/dbconnect.php';

  //$query=$pdo->query('SELECT * from users');
  //$users=$query->fetchALL();
?>
<div class="container">
  <table>
     <thead>
      <tr>
            <th>user ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
      </tr>
     </thead>
     <tbody>
     <?php foreach($users as $user): ?>
     <tr>
        <td><?php echo $user['id'] ?></td>
        <td><?php echo $user['name'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td><?php echo $user['password'] ?></td>
        <td><a href="edit_users.php?id=<?php echo $user['id']; ?>">Edit user </a></td>
        <td><a href="delete_users.php?id=<?php echo $user['id']; ?>">Delete user </a></td>
        <td><a href="add_users.php?id=<?php echo $user['id']; ?>">Add user </a></td>
     <tr>
     <?php endforeach; ?>
     </tbody>
  </table>
</div>