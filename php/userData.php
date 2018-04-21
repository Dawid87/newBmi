<?php 
require "db.php";
session_start();
$u_bmi = $_POST["name"];
$weight = $_POST["password"];
$mysql_query = "SELECT * FROM user_bmi WHERE u_bmi LIKE'$u_bmi' AND weight = '$weight';";
$result = mysqli_query($conn, $mysql_query);
if(mysqli_num_rows($result) > 0){
	echo "SUCCESS";
	echo "<p><a href='logout.php'>Logout</a></p>";
}
else {
	echo "FAILL";
}

?>