<?php
session_start();
include "db_con.php";

if (isset($_POST['uname']) && isset($_POST['password'])){
	
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$uname = validate($_POST['uname']);
	$password = validate($_POST['password']);
	
	
	
	if(empty($uname)){
		header("Location: logiin.php?error=Login jest wymagany");
		exit();
	}else if(empty($password)){
		header("Location: logiin.php?error=Haslo jest wymagane");
		exit();
	}else{
		
		$password=md5($password);
		
		$sql = "SELECT * FROM tabela WHERE login='$uname' AND haslo='$password'";
		
		
		
		
		
		
		
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) === 1){
			$row = mysqli_fetch_assoc($result);
			if($row['login']=== $uname && $row['haslo']===$password){
				$_SESSION['login'] = $row['login'];
				$_SESSION['imie'] = $row['imie'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['nazwisko'] = $row['nazwisko'];
				$_SESSION['data'] = $row['data'];
				$_SESSION['opis'] = $row['opis'];
				
				header("Location: home.php");
				
				


				exit();
			}else{
				header("Location: logiin.php?error=Niepoprawny login lub hasło");
				exit();
			}
		}else{
			header("Location: logiin.php?error=Niepoprawny login lub hasło");
			exit();
		}
	}
	
}else{
	header("Location: logiin.php");
	exit();
}


?>