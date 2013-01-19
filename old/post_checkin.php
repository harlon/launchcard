<?php
// Select your MySQL host, username and password
$mysqli = new mysqli("localhost","launchca_user","launchcardlabs","launchca_bd");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($mysqli));
    exit;
}
$user_id 	= $_POST['user_id'];
$event_id 	= $_POST['event_id'];

$insert = "INSERT INTO user_has_checkin (user_id,event_id) VALUES ('" . $user_id . "', '" . $event_id . "')";
$mysqli->query($insert);
printf("You've made a Checkin!");

$mysqli->close(); 

?>