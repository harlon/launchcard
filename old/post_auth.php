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

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '" . $email . "' AND password = '" . $password . "'";
$query = mysql_query($sql);
if (mysql_num_rows($query) > 0)
{
	$row = mysql_fetch_array($query);
	$response = array(
		'logged' => true,
		'firstname' => $row['firstname'],
		'lastname'=>$row['lastname'],
		'email' => $row['email'],
		'id' =>$row['id']
	);
	echo json_encode($response);
}
else
{
	$response = array(
		'logged' => false,
		'message' => 'Invalid Email and/or Password'
	);
	echo json_encode($response);
}
?>



