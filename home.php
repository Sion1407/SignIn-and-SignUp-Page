<?php
session_start();
if (!isset($_SESSION['username'])) {
	// code...
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Homepage</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>Welcome to Homepage  <?php echo $_SESSION['username']; ?></h1>
</body>
</html>