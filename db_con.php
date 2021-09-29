<?php
$sname="localhost";
$unmae="33794338_32";
$password="WzpOO8rk";
$db_name="33794338_32";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(!$conn){
	echo "Connection Failed!";
}
?>