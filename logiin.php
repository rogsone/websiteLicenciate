<?php

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        https://i.imgur.com/V883NlP.png
    </style>
	<link rel="shortcut icon" href="https://i.imgur.com/otjevqB.png" type="image/png">
</head>
<body style="background-image: url('https://i.imgur.com/UYIh1cj.png');">

    <div class="container" >
	<div class="row mt-5 justify-content-center">
	<div class="col-12 text-center" >
	
        
        <form action="login.php" method="post" style="box-shadow: 20px 20px 50px rgba(0,0,0,0.5); background: rgba(255,255,255,0.1);  overflow:hidden; justify-content: center; align-items: center; border-top: 1px solid rgba(255,255,255,0.5); border-left: 1px solid rgba(255,255,255,0.5); backdrop-filter: blur(10px); margin-bottom:20px; ">
           <br> <h2 style="color: #FFFFFF">Logowanie</h2>
        <p style="color: #FFFFFF">Prosze wypełnić poniższe pola</p>
		<?php if(isset($_GET['error'])){?>
				<p class="error" style="background: #F2DEDE; color: #A94442; padding: 10px; width: 45%; border-radius: 5px; margin: 20px auto;font-family: 'Rubik', sans-serif;">
				<?php echo $_GET['error'];?></p>
			<?php }?>
			<?php if (isset($_GET['success'])) { ?>
               <p class="alert alert-success" style="width: 45%; margin: 20px auto;"><?php echo $_GET['success']; ?></p>
			<?php } ?>
			<div class="form-group" >
			<div class="col-4 mt-5">
			
			</div>
                
				<div class="row mt-3 my-3 justify-content-center">
                <input type="text"  placeholder="login" name="uname" style="width: 50%" class="form-control" value="">
                <span class="help-block"></span>
				</div>
            </div>    
            <div class="row mt-3 my-3 justify-content-center">
                <input type="password" class="form-control" placeholder="Hasło"  name="password" style="width: 50%">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" style="background-color: #fba200; color:#FFFFFF; border-color:#fba200; " value="Potwierdź">         <a class="btn btn-danger" href="home_main.php" role="button" style="margin-left:20px;">Powrót</a><br>
				<br><a href="signup.php" style="color:#FFFFFF; text-decoration: none; ">Utwórz konto</a><br>
				
            </div><br>
			</div>
            
			
			
        </form>
    </div>
	</div>
	</div>
</body>
</html>