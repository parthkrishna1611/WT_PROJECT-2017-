<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Economica" rel="stylesheet">
	<link rel="stylesheet" href="navbar.css">
	<style type="text/css">
		body{
			font-family: 'Economica', sans-serif;
			background-image: url("TRAVIS-HALL-339001.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<nav>
                <ul class="topnav" id="dropdownclick">
                  <li><a href="amith.php">HOME</a></li>  
                  <li><a href="vids.html">VIDEO TUTORIALS</a></li>
                  <li><a href="aboutus.html">ABOUT</a></li>
                  <li><a href="contact.html">CONTACT</a></li>
                  <li class="nav_right"><a href="login.php">LOG IN</a></li>
                  <li class="nav_right"><a href="register.php">SIGN UP</a></li>
                  <li class="dropdownicon"><a href="javascript:void(0);" onclick="dropdownmenu()">&#9776;</a></li>    
                </ul>  
     </nav>
	<div class="header">
		<h2><u>Login</u></h2>
	</div>

	<form method="post" action="login.php" style="align-content: center;">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" style="margin-left: 9px;">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>
