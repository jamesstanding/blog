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

if ($stmt = $dbcreds -> prepare("INSERT INTO `users` (`email`, `password`) VALUES ('" . $email. "' ,  '" . $hash . "')"))
{
	$stmt -> execute();
	//$stmt -> bind_result($email, $hash);
	$stmt -> store_result();
	
	if ($stmt -> insert_id == 0)
	{
		echo "database error!";
		exit();
	}
	$stmt -> close();
}


?>
