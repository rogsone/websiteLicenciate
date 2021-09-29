<?php

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="https://i.imgur.com/otjevqB.png" type="image/png">
</head>
<body style="background-image: url('https://i.imgur.com/UYIh1cj.png');">
		
    <div class="container" >
	<div class="row mt-5 justify-content-center">
	<div class="col-12 text-center" >
	
        
        <form action="signup-check.php" method="post" style="box-shadow: 20px 20px 50px rgba(0,0,0,0.5); background: rgba(255,255,255,0.1);  overflow:hidden; justify-content: center; align-items: center; border-top: 1px solid rgba(255,255,255,0.5); border-left: 1px solid rgba(255,255,255,0.5); backdrop-filter: blur(10px); margin-bottom:20px; ">
            <br><h2 style="color: #FFFFFF">Rejestracja</h2>
        <p style="color: #FFFFFF">Prosze wypełnić poniższe pola</p>
			<?php if (isset($_GET['error'])) { ?>
     		<p class="error" style="width:45%;"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			
			<label style="color: #FFFFFF">Imie</label>
          <?php if (isset($_GET['imie'])) { ?>
               <input type="text" style="width:55%;" 
                      name="imie" 
                      placeholder="25 znaków maksymalnie"
					  maxlength="25"
                      value="<?php echo $_GET['imie']; ?>"><br>
          <?php }else{ ?>
				<input type="text" 
                      name="imie"
					  maxlength="25"
                      placeholder="25 znaków maksymalnie"><br>
          <?php }?>
		  <label style="color: #FFFFFF">Nazwisko</label>
		  <?php if (isset($_GET['nazwisko'])) { ?>
               <input type="text" 
                      name="nazwisko" 
                      placeholder="25 znaków maksymalnie"
					  maxlength="25"
                      value="<?php echo $_GET['nazwisko']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="nazwisko"
					  maxlength="25"
                      placeholder="25 znaków maksymalnie"><br>
          <?php }?>
		  <label style="color: #FFFFFF">Opis</label>
		  <?php if (isset($_GET['opis'])) { ?>
               <input type="text" 
                      name="opis" 
                      placeholder="opis profilu"
					  maxlength="1000"
                      value="<?php echo $_GET['opis']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="opis"
					  maxlength="1000"
                      placeholder="Opis profilu"><br>
          <?php }?>
		  
          <label style="color: #FFFFFF">Login</label>
          <?php if (isset($_GET['login'])) { ?>
               <input type="text" 
                      name="login" 
                      placeholder="Login"
                      value="<?php echo $_GET['login']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="login" 
                      placeholder="Login"><br>
          <?php }?>


     	<label style="color: #FFFFFF">Hasło</label>
     	<input type="password" 
                 name="haslo" 
                 placeholder="Hasło"><br>

          <label style="color: #FFFFFF">Powtórz Hasło</label>
          <input type="password" 
                 name="re_haslo" 
                 placeholder="Powtórz Hasło"><br>

     	<button type="submit" style="background-color:#fba200; color: #FFFFFF;">Dołącz</button>
          <a href="logiin.php" class="ca" style="text-decoration: none; color: #FFFFFF;">Posiadasz już konto??</a>
		  <br><br><br>
		  
		
        </form>
    </div>
	
	</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
