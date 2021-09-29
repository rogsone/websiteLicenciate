<?php
session_start();
require_once('db_con.php');

if(isset($_POST['delete'])){
	
	$id = $_SESSION['id'];
	$query = "DELETE FROM tabela WHERE id = '$id'";
	$result12 = mysqli_query($conn, $query);
	
	if($result12){
		header("Location:logiin.php?success=Twoje konto zostało usunięte pomyślnie");
	}else{
		echo "Proszę sprawdź swoje zapytanie";
	}
}else{
	header("Location:profil.php?nieudalo");
}











?>