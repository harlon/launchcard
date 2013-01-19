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


$firstname 	= $_POST['firstname'];
$lastname 	= $_POST['lastname'];
$bio		= $_POST['bio'];
$email		= $_POST['email'];
$user_id    = $_POST['user_id'];
$profile_id = $_POST['profile_id'];


	$insert = "UPDATE profiles SET  user_id='$user_id', first_name='$firstname', last_name='$lastname', bio='$bio', email='$email' where profile_id='$profile_id' ";
	$query 	= mysql_query($insert);
	if ($query)
	{
		echo "Profile Updated!";
	}
	else
	{
		echo "Updated failed";
	}

?>