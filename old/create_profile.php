<?php
// Select your MySQL host, username and password
$con = mysql_connect('localhost','root','');
if (!$con)
{
	echo "Failed to make connection.";
	exit;
}
// Select the database. Enter the name of your database (not the same as the table name)
$db = mysql_select_db('_bd');
if (!$db)
{
	echo "Failed to select db.";
	exit;
}


$firstname 	= $_POST['firstname'];
$lastname 	= $_POST['lastname'];
$bio		= $_POST['bio'];
$email		= $_POST['email'];
$user_id    = $_POST['user_id'];


	$insert = "INSERT INTO profiles (user_id, first_name, last_name, bio, email) VALUES ('" . $user_id . "','" . $firstname . "','" . $lastname . "','" . $bio . "','" . $email . "')";
	$query 	= mysql_query($insert);
	if ($query)
	{
		echo "Profile Created!";
	}
	else
	{
		echo "Insert failed";
	}

?>