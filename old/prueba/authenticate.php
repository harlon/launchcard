<?
// Configura los datos de tu cuenta
$dbhost='localhost';
$dbusername='root';
$dbuserpass='';
$dbname='test';
session_start();
// Conectar a la base de datos
mysql_connect ($dbhost, $dbusername, $dbuserpass);
mysql_select_db($dbname) or die('Cannot select database');
if ($_POST['email']) {
//Comprobacion del envio del nombre de usuario y password
$email=$_POST['email'];
$password=$_POST['password'];
if ($password==NULL) {
echo "La password no fue enviada";
}else{
$query = mysql_query("SELECT email,password,id,firstname,lastname FROM users WHERE email = '$email'") or die(mysql_error());
$data = mysql_fetch_array($query);
if($data['password'] != $password) {
echo "Login incorrecto";
}else{
$query = mysql_query("SELECT email,password,id,firstname,lastname FROM users WHERE email = '$email'") or die(mysql_error());
$row = mysql_fetch_array($query);
$_SESSION["s_email"] = $row['email'];
$_SESSION["s_id"]=$row['id'];
$_SESSION["s_firstname"]=$row['firstname'];
$_SESSION["s_lastname"]=$row['lastname'];

Header("Location: upload.php");}
}
}
?>