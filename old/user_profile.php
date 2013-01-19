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


$user_id=$_GET['user_id'];
$sql = "select first_name, email, bio, last_name, profile_id from profiles where user_id=$user_id";
$query = mysql_query($sql);

$return_arr=Array();

while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
    array_push($return_arr,$row);

    
}
echo json_encode($return_arr);

?>







