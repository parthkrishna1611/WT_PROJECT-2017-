<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
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
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>" style="margin-left:100px; ">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>" style="margin-left:158px; ">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" style="margin-left: 109px;">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" style="margin-left: ">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>

        
</body>
</html>
