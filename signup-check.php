<?php 
session_start(); 
include "db_con.php";

if (isset($_POST['login']) && isset($_POST['haslo'])
    && isset($_POST['haslo']) && isset($_POST['re_haslo'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$login = validate($_POST['login']);
	$haslo = validate($_POST['haslo']);

	$re_haslo = validate($_POST['re_haslo']);
	$imie = validate($_POST['imie']);
	$nazwisko = validate($_POST['nazwisko']);
	$data = validate($_POST['data']);
	$opis = validate($_POST['opis']);

	$user_data = '&login='. $login. '&imie='. $imie;


	if (empty($login)) {
		header("Location: signup.php?error=Login jest wymagany&$user_data");
	    exit();
	}else if(empty($haslo)){
        header("Location: signup.php?error=Hasło jest wymagane&$user_data");
	    exit();
	}
	else if(empty($re_haslo)){
        header("Location: signup.php?error=Powtórzenie hasła jest wymagane&$user_data");
	    exit();
	}

	else if(empty($imie)){
        header("Location: signup.php?error=Imie jest wymagane&$user_data");
	    exit();
	}

	else if($haslo !== $re_haslo){
        header("Location: signup.php?error=Hasła się nie zgadzają&$user_data");
	    exit();
	}
	else if(empty($nazwisko)){
        header("Location: signup.php?error=Nazwisko jest wymagane&$user_data");
	    exit();
	}
	
	

	else{

		// hashing the password
        $haslo = md5($haslo);

	    $sql = "SELECT * FROM tabela WHERE login='$login' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Nazwa użytkownika jest już zajęta&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO tabela(login, haslo, imie, nazwisko, opis) VALUES('$login', '$haslo', '$imie', '$nazwisko', '$opis')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: logiin.php?success=Twoje konto zostało utworzone pomyślnie");
	         exit();
           }else {
	           	header("Location: signup.php?error=Nieznany error&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}