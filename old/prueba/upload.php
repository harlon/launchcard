<?
include_once("config.php");
echo 'Firstname:'.$_SESSION[s_firstname];
echo 'Lastname:'.$_SESSION[s_lastname];
echo 'email '.$_SESSION[s_email]; 

echo 'ID: '.$_SESSION[s_id]; 

echo '<br><a href=logout.php>Logout</a>';


?>
<html>
<body>

<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>