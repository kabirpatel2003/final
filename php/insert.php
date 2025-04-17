<?php
include '../includes/db.php';

if (isset($_POST['submit'])) {
    $message = $_POST['message'];
    $stmt = $conn->prepare("INSERT INTO string_info (message) VALUES (?)");
    $stmt->bind_param("s", $message);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
header("Location: ../index.php");
?>