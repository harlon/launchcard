<?php
// Select your MySQL host, username and password
$con = mysql_connect('localhost','launchca_user','launchcardlabs');
if (!$con)
{
	echo "Failed to make connection.";
	exit;
}
// Select the database. Enter the name of your database (not the same as the table name)
$db = mysql_select_db('launchca_bd');
if (!$db)
{
	echo "Failed to select db.";
	exit;
}


$email		= $_POST['email'];
$password 	= $_POST['password'];
$firstname	= $_POST['firstname'];
$lastname 	= $_POST['lastname'];


$sql 		= "SELECT email FROM users WHERE email = '" . $email . "'";
$query 		= mysql_query($sql);
if (mysql_num_rows($query) > 0)
{
	echo "That email already exists";
}
else
{
	$insert = "INSERT INTO users (email, password, firstname, lastname) VALUES ('" . $email . "','" . $password . "','" . $firstname . "','" . $lastname . "')";
	$query 	= mysql_query($insert);
	if ($query)
	{
		echo "Thanks for registering. You may now login.";
	}
	else
	{
		echo "Insert failed";
	}
}
?>