<?php 
session_start();
include "db_con.php";


if(isset($_SESSION['id']) && isset ($_SESSION['login'])){
?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="style1.css">

        <title>KendroSite</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="shortcut icon" href="https://i.imgur.com/otjevqB.png" type="image/png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    </head>
    <body id="body-pd"> 
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <div class="header__img">
                <img src="https://i.imgur.com/otjevqB.png">
            </div>
			<p href="home.php" style="margin-top:15px; font-size:18px;"class="header_login">
                    
                    <span class="nav__name">Sklep Internetowy</span>
			</p>
        </header> 

        <div class="l-navbar" id="nav-bar" >
            <nav class="nav">
                <div>
                    <p href="#" class="nav__logo">
                        <span class="nav__logo-name" style="margin-left:4px;">&#77;</span>
                        <span class="nav__logo-name" style="margin-left:4px;">MENU</span>
                    </p>
                    <div class="nav__list">
                        <a href="home.php" class="nav__link">
                            <i class='bx bx-home-alt nav__icon' ></i>
                            <span class="nav__name">Strona Główna</span>
                        </a>
                        <a href="profil.php" class="nav__link active">
                            <i class='bx bx-body nav__icon'></i>
                            <span class="nav__name">Profil</span>
                        </a>
                        
                    </div>
                </div>
                <a href="logout1.php" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Wyloguj</span>
                </a>
            </nav>
        </div>
		

        

    <div class="row">
	<div class="col-sm-6 col-xs-12">
	
			<br><br><br><br><br><br><input id="slider" class="customSlider" type="checkbox">
			<label for="slider"></label>
		<div class="wrapper">
	
	
        
    
        <div class="user">
            <img src="https://i.pinimg.com/originals/4a/9b/9b/4a9b9b8f4553db8a336244217375ecdf.png" class="thumbnail">
            
            <h3 class="name"><?php echo $_SESSION['login'];?><br></h3>
            <p class="title">Imie: <?php echo $_SESSION['imie'];?> <br> Nazwisko: <?php echo $_SESSION['nazwisko'];?></p>
            <p class="description" style="margin:auto;">Opis: <br><?echo $_SESSION['opis'];?></p>
			<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">Edytuj Profil</button>
			<form action="delete.php" method="post">
				<button type="submit" name="delete"class="btn1" onclick="return confirm('Czy na pewno chcesz usunąć konto')">Usuń</button>
			</form>
        
		<br><?php if (isset($_GET['success'])) { ?>
		   <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		   <?php } ?>
		<?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
        <br><div class="social-icons">
            <div class="icon">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <h4>98.5k</h4>
                <p>Followers</p>
            </div>
    
            <div class="icon">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <h4>44.5k</h4>
                <p>Followers</p>
            </div>
    
            <div class="icon">
                <a href="#"><i class="fab fa-youtube"></i></a>
                <h4>100k</h4>
                <p>Followers</p>
            </div>
        </div>
		
		
    </div> 
	
	</div>
	</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edycja Konta</h5>
        <i type="button" class="fa fa-times" data-dismiss="modal" aria-label="Close"></i>
      </div>
      <div class="modal-body">
	  <?php require_once "update.php";?>
        <form action="update.php" 
		      method="post">
		   <div class="form-group">
		     <label for="imie">Imie</label>
		     <input type="imie" 
		           class="form-control" 
		           id="imie" 
		           name="imie"
		           value="<?=$row['imie'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="nazwisko">Nazwisko</label>
		     <input type="nazwisko" 
		           class="form-control" 
		           id="nazwisko" 
		           name="nazwisko" 
		           value="<?=$row['nazwisko'] ?>" >
		   </div>
		   
		   <div class="form-group">
		     <label for="haslo">Hasło</label>
		     <input type="password" 
		           class="form-control" 
		           id="haslo" 
		           name="haslo" 
		           value="<?=$row['haslo'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="confhaslo">Powtórz Hasło</label>
		     <input type="password" 
		           class="form-control" 
		           id="confhaslo" 
		           name="confhaslo" 
		           value="<?=$row['haslo'] ?>" >
		   </div>
		    <div class="form-group">
		     <label for="opis">Opis</label>
		     <input type="text" 
		           class="form-control" 
		           id="opis"
					maxlength="1000"
		           name="opis" 
		           value="<?=$row['opis'] ?>" >
		   </div>
		   <input type="hidden" 
		          name="id"
		          value="<?=$row['id']?>"
		           >
			<button type="submit" class="btn btn-primary" name="update">Zaktualizuj</button>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
	    </form>
      </div>
      
    </div>
  </div>
</div>



    
	
<br><br>		 

        
        <!--===== MAIN JS =====-->
        <script src="main.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>






<?php }else{
	header("Location: logiin.php");
	exit();
}?>
