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


$event_id=$_GET['event_id'];
$sql = "select u.firstname, u.id, u.lastname from users u, events e, user_has_checkin c where u.id=c.user_id and e.event_id=c.event_id and e.event_id=$event_id";
$query = mysql_query($sql);
$return_arr=Array();

while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
    array_push($return_arr,$row);

    
}
echo json_encode($return_arr);

?>







