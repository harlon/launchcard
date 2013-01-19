<?
session_start();
session_destroy(); //we destroy the session
Header("Location: login.php"); //we comeback to the login.php

?>