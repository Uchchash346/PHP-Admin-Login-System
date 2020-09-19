<?php
session_start();

if (!isset($_SESSION['email'])) {
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
</head>
<body>
	<h1>Welcome to Admin Panel</h1>
	<p><?php echo $_SESSION['email']; ?></p>

	<a href="logout.php">Logout</a>

</body>
</html>