<!DOCTYPE html>

<html>
<body>
<link rel="stylesheet" href="styles.css">
<h2>Login Page</h2>

<div class="container">

<form action="/login2.php" method="POST">

 <div class="container">
	<label for="email"><b>Email</b></label>
	<input type="text" placeholder="Please enter your email" name="email" required>
	
	<label for="password"><b>Password</b></label>
	<input type="password" placeholder="Please enter your password" name="password" required>
	
	<button type="submit">Login</button>
	<label>
		<input type="checkbox" checked="checked" name="remember"> Remember details
	</label>
</div>
	
</body>
</html>

