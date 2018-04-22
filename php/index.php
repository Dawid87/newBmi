<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>BMI Calculator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/newBmi/css/style.css">
</head>
<body>
	
	

	
	<header>

		<nav>
		<ul>
			<li><a id="nav2" href="/newBmi/php/logout.php">Logout</a></li>
			<!-- <li><a id="nav2" href="test2.html">TEST2</a></li> -->
		</ul>

		<a href="index.html"><img id="logo"  src="/newBmi/img/logo.png" alt="sic!" width="100" height="49"></a>
		</nav>

		<hgroup>
			<h1>BMI Calculator</h1>

			<h2>Height: <input id="height" type="text" name="height"> in cm e.g. 180cm</h2>

			<h2>Weight: <input id="weight" type="text" name="weight"> in kg e.g. 80kg</h2>

			<h2>Your BMI: <a id="ybmi" type="vlue"></a></h2>

			<h2>BMI Category: <a id="bmi_cat"></a></h2>

			<button onclick="calculate()" type="button" class="btn btn-danger btn-lg center-block">Calculate</button>
		</hgroup>

			<!-- <img src="img/webBackground90degree.png"> -->
		<section>
<!--			<img src="img/scale3.png">-->
			<img src="/newBmi/img/webBackground.png">
     		<div id="arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
     	</section>

	</header>

	<main>
		<section>
			 <div class="slidecontainer">
                		<input type="range" min="10" max="50" value="35" class="slider" id="myRange">
        		</div>
        
        
        <!--<img id="warning" src="/bmi/img/warning.png" style="width: 90px; height: 90px; position:absolute;top:70px;left:80%;">-->
        		<aside>
			    <h2>Diagnosis</h2>
			    <p>Body mass index (BMI) is a simple way offinding out whether a person is healthy weight for their weight</p>
			    <p>The healthy BMI for adult person is between 18.5 to 24.9, further person with BMI between 25 and 29.9 is considered as overweigh. BMI over 30 is considered as obese.</p>
			    <p>For more information please visit <a href="https://www.nhs.uk/conditions/obesity/" target="_blank">NHS</a></p>
		    	
			</aside>
			
		</section>
		
		<img src="/newBmi/img/webBackground.png">
		<div id="arrow_up"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
	</main>

	<footer>
		<ul>
				<li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
				<li><a href="https://en-gb.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://play.google.com/store/apps/details?id=com.dawid.dawiddelimata.bmicalculator_ver14&hl=en" target="_blank"><i class="fa fa-play"></i></a></li>
				<li><a href="https://github.com/Dawid87" target="_blank"><i class="fa fa-github"></i></a></li>
			</ul>
			<h6>Copyright &copy s.i.c. | All Rights Reserved</h6>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="/newBmi/script/script.js"></script>
</body>
</html>
