<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		require('db.php');
		session_start();
	
		$u_bmi = $_POST['u_bmi'];
		$weight = $_POST['weight']
		$mysql_query = "INSERT INTO 'user_bmi' (u_bmi, weight) VALUES ('$u_bmi', '$weight')";

	

	?>
</body>
</html>