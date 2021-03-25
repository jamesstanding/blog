
<?php

$email = $_POST['email'];
$password = $_POST['password'];

if (strlen($email) < 1 || strlen($email) >30 )
{
	if (strlen($email) < 1)
		echo "Email is too short";
	else
		echo "Email is too long";
	exit();
}
else if (strpos($email, '@') == false)
{
	echo "Email Syntax invalid";
	exit();
}
else if (strlen($password) < 8)
{
	echo "Password length too short!";
	exit();
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$dbcreds = new mysqli('localhost', 'root', '', 'blog');

if ($stmt = $dbcreds -> prepare("SELECT `id`,  `password` FROM `users` WHERE BINARY `email` = ? LIMIT 1 "))
{
	$stmt -> bind_param("s", $email);
	$stmt -> execute();
	$stmt -> bind_result($id_db, $password_db);
	$stmt -> store_result();
	
	while ($stmt -> fetch())
	{
		
		if (password_verify($password, $password_db))
		{
			session_start();
			$_SESSION['uemail'] = $email;
			$_SESSION['uid'] = $id_db;
			
			echo "Logged in! Welcome user: " .$id_db;
			header( 'Location: http://localhost/homepage.php' ); exit();
		}
		else
		{
			echo "Wrong password!";
		}
	}
	$stmt -> close();
}



?>




