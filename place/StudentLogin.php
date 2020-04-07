<html>
<head>
	<title>Login and Register Form Design</title>
	<link rel="stylesheet" type="text/css" href="StudentLogin.css">
	</head>
<body>
	<div class="menu">
		
			<div class="leftmenu">
				<h4> DSATM-PMS </h4>
			</div>
			
			
			<div class="rightmenu">
			<ul>
				<li><a href="AdminLogin.php">ADMIN LOGIN</a></li>
				<li><a href="StudentLogin.php">STUDENT LOGIN</a></li>
				<li><a href="https://dsatm.edu.in/index.php/about-dsatm">ABOUT US</a></li>
				<li><a href="#">CONTACT US</a></li>
				<li><a href="index.php">BACK</a></li>
				
			</ul>
			</div>
		</div>

	<div class="loginbox">
	<img src="avatar.png" class="avatar">
		<div class="form">
			<form action="validation.php"  class="Login-form" method="post">
			<h1>Login Here</h1>
			<p>Username</p>
			<input type="text" name="user" placeholder="Enter username" required>
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password" required>
			<br><br>
			<input type="submit" name="submit" value="Login">
			<br><br>
			<p class="message">Don't have an account? <a href="#">Register</a>
			</p>
			
			</form>
			
		
			<form action="register.php" class="Register-form" method="post">
			<h1>Register Here</h1>
			<p>Username</p>
			<input type="text" name="user" placeholder="Enter username" required>
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password" required>
			<input type="submit" name="submit" value="Register">
			<p class="message">Already registered? <a href="#"> Login</a>
			</p>
			</form>
		</div>
	</div>
	<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
	
	<script>
	$('.message a').click(function(){
	$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
	});	
	</script>
</body>

</html>