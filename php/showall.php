<?php
include '../includes/header.php';
include '../includes/db.php';
?>

<h2>All Records</h2>

<?php
$result = $conn->query("SELECT * FROM string_info");

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['string_id'] . " - Message: " . $row['message'] . "<br>";
}
?>

<h3>Delete a Record</h3>
<form method="POST" action="delete.php">
    <input type="number" name="string_id" placeholder="Enter ID to delete" required>
    <button type="submit" name="delete">Delete</button>
</form>

</body>
</html>