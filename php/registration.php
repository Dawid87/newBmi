<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="../css/style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<header><div class='form'>
<h3 align='center' style='margin-top:30%'>You are registered successfully.</h3>
<br/><h3 align='center' style='margin-top:-8%'>Click here to <a href='login.php'>Login</a></h3><a href='/newBmi/index.html'><img id='logo'  src='/newBmi/img/logo_white.png' alt='sic!' width='100' height='49' style='position:relative; top:7rem; left:50%; transform: translateX(-50%);'></a></div><section><img src='/newBmi/img/webBackground.png'></section></header>";
        }
    }else{
?>

<header>
    <nav>
        <ul>
            <li><a href="~/index.html" ></a></li>
            <li><a href="/newBmi/php/registration.php" ></a></li>
            <!-- <li><a href="Logout.php">Save</a></li> -->
        </ul>
                <a href="/newBmi/index.html"><img id="logo"  src="/newBmi/img/logo.png" alt="sic!" width="100" height="49"></a>
    </nav>
<div class="form">
    
<h1>Registration</h1>
            <form name="registration" action="" method="post">
            <input class="form-control input-lg" type="text" name="username" placeholder="Username" required />
            <input class="form-control input-lg" type="email" name="email" placeholder="Email" required />
            <input class="form-control input-lg" type="password" name="password" placeholder="Password" required />
            <input id="button2" class="btn btn-danger btn-lg center-block" type="submit" name="submit" value="Register" />
        </form>
    </div>
    
    <section>
<!--			<img src="img/scale3.png">-->
			<img src="/newBmi/img/webBackground.png">
<!--     		<div id="arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>-->
     </section>
</header>
<?php } ?>
<footer>
        <ul>
            <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://en-gb.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://play.google.com/store/apps/details?id=com.dawid.dawiddelimata.bmicalculator_ver14&hl=en" target="_blank"><i class="fa fa-play"></i></a></li>
            <li><a href="https://github.com/Dawid87" target="_blank"><i class="fa fa-github"></i></a></li>
        </ul>
            <h6>Copyright &copy s.i.c. | All Rights Reserved</h6>
    </footer>
</body>
</html>