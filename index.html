<!DOCTYPE html>
<html>
<head>
	<title>Get User OS</title>
</head>
<body>
	<h1>Get User OS</h1>
	<form method="post">
		<label for="ip">Enter IP address:</label>
		<input type="text" id="ip" name="ip">
		<input type="submit" value="Submit">
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Retrieve the user's IP address from the user input
		$ip = $_POST['ip'];

		// Set up the URL for the API request
		$url = "https://tools.keycdn.com/geo.json?host=$ip";

		// Send the API request and retrieve the response
		$response = file_get_contents($url);

		// Decode the response JSON into an associative array
		$data = json_decode($response, true);

		// Extract the user's OS from the response data
		$os = $data['data']['geo']['os'];

		// Display the user's OS
		echo "<p>The user's OS is $os.</p>";
	}
	?>
</body>
</html>
