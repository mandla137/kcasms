<html>
<?php
session_start();
$host="localhost";
$username="root"
$pass="";
$db="phppractice";

$conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	die("database connection error");
}
?>
</html>