<?php 
$servername = "localhost:3306";
$username1 = "chaudhar_shekhar";
$password1 = "shekhar@123";
$dbname = "chaudhar_leanevento";

$conn = mysqli_connect($servername,$username1,$password1,$dbname);

if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected Successfully <br>";



//mysqli_close($conn);

 ?>