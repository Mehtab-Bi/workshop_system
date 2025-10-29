<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $phone   = trim($_POST['phone']);
    $college = trim($_POST['college']);

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($college)) {
        $stmt = $conn->prepare("INSERT INTO users (name, email, phone, college, approved) VALUES (?, ?, ?, ?, 0)");
        $stmt->bind_param("ssss", $name, $email, $phone, $college);

        if ($stmt->execute()) {
            header("Location: success.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please fill in all the fields.";
    }
} else {
    echo "Invalid request.";
}
?>
