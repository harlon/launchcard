<?php
include_once("config.php");
echo 'Welcome '.$_SESSION[email]; 


$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

  
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . "profile_pic"."_".$_SESSION[s_id]."_".$_SESSION[s_firstname]."_".$_SESSION[s_lastname].".png");
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
   
    }
  }
else
  {
  echo "Invalid file";
  }
?>