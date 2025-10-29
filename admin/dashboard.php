<?php
session_start();
?>
<?php
include('../db.php');

$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

  <div class="admin-container">
    <h1>Admin Dashboard</h1>
    <p>Manage workshop registrations and generate certificates for approved participants.</p>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>College</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['college']; ?></td>
          <td>
            <?php echo $row['approved'] ? '✅ Approved' : '❌ Pending'; ?>
          </td>
          <td>
            <?php if (!$row['approved']) { ?>
              <a href="approve.php?id=<?php echo $row['id']; ?>" class="btn approve">Approve</a>
            <?php } ?>
            <?php if ($row['approved']) { ?>
              <a href="generate.php?id=<?php echo $row['id']; ?>" class="btn generate">Generate</a>
            <?php } ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

</body>
</html>
