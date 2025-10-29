<?php
session_start();

// If not logged in as admin, redirect to login page
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}
?>
<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

require_once("../db.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "UPDATE users SET approved = 1 WHERE id = $id";
    mysqli_query($conn, $query);
}

header("Location: dashboard.php");
exit();
?>
