<<!DOCTYPE html>

<html>
<body>
<link rel="stylesheet" href="styling.css">

<form action="index2.php" method="POST">
	<div class="container">
		<h1>Welcome to the Football blog!<h1>
		<p>Please sign up below or click login if you already have an account<p>
	
		<label for="email">Enter Email</label>
		<input type="text" name="email" placeholder="Email address" required>
		
		<label for="password">Enter Password</label>
		<input type="password" name="password" placeholder="Enter password" required>
		
		<label for "password-repeat">Repeat Password</label>
		<input type="password" name="psw-repeat" placeholder="Re-enter password" required>
		
		<div class="clearfix">
			<button type="sumbit" class="signupbtn">Sign Up</button> 
		</div>
	</div>
</form>
		<button type="sumbit" class="loginbtn" onclick="location.href='https://localhost/login.php';">Login</button>
</body>
</html>



