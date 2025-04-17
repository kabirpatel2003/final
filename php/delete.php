<?php
include '../includes/db.php';

if (isset($_POST['delete'])) {
    $id = $_POST['string_id'];
    $stmt = $conn->prepare("DELETE FROM string_info WHERE string_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
header("Location: showAll.php");
?>