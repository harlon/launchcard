<?
$dbhost="localhost"; //mysql host
$dbuser="root"; //mysql user
$dbpass=""; //mysql user pass
$db="_bd"; //bd

//we connect to the db and we select the db
mysql_connect("$dbhost","$dbuser","$dbpass");
mysql_select_db("$db"); 

//we start the session, this apply to all the system that contain the config.php file
session_start(); 
?>