<?php include 'includes/header.php'; ?>

<h2>porvide Message</h2>
<form method="POST" action="php/insert.php">
    <input type="text" name="message" required>
    <button type="submit" name="submit">Submit</button>
</form>

<br>
<a href="php/showAll.php">Show all records</a>

</body>
</html>