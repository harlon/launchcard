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



$profile_id    = $_GET['profile_id'];


	$insert = "DELETE FROM profiles  where profile_id='$profile_id' ";
	$query 	= mysql_query($insert);
	if ($query)
	{
		echo "Profile Deleted!";
	}
	else
	{
		echo "Delete failed";
	}

?>