<?php 
session_start();

if(isset($_POST['update'])){
    include "db_con.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$uname = validate($_POST['imie']);
	$nazwisko = validate($_POST['nazwisko']);
	$id = $_SESSION['id'];
	$haslo = $_POST['haslo'];
	$opis = $_POST['opis'];
	$confhaslo = $_POST['confhaslo'];
	

	if (empty($uname)) {
		header("Location: profil.php?id=$id&error=Imie jest wymagane");
	
	}
	
	else if (empty($nazwisko)) {
		header("Location: profil.php?id=$id&error=Nazwisko jest wymagane");
	}
	
	else if (empty($haslo)) {
		header("Location: profil.php?id=$id&error=Hasło jest wymagane");
	}
	
	else if($haslo !== $confhaslo){
       header("Location: profil.php?id=$id&error=Hasła nie są identyczne");
    }
	
	
	else {
		$haslo = md5($haslo);
		
		
		
	
	   $sql = "UPDATE tabela SET imie='$uname', nazwisko='$nazwisko', haslo='$haslo', opis='$opis' WHERE id='$id' ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: profil.php?success=Twoje konto zostało zaktualizowane poprawnie! Zaloguj się ponownie, aby zobaczyć zmiany ;)");
       }else {
          header("Location: profil.php?id=$id&error=nieznany błąd&$user_data");
       }
	   
	}
}

















?>