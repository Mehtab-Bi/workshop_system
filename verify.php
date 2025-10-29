<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $workshop = $_POST["workshop"];

    $stmt = $conn->prepare("INSERT INTO registrations (name, email, workshop) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $workshop);

    if ($stmt->execute()) {
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
