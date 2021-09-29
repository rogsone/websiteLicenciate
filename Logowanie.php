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
        
    </style>
</head>
<body>

    <div class="container" >
	<div class="row mt-5 justify-content-center">
	<div class="col-12 text-center" >
	
        <h2>Logowanie</h2>
        <p>Prosze wypełnić poniższe pola</p>
        <form action="login.php" method="post">
            <div class="form-group" >
			<div class="col-4 mt-5">
			
			</div>
                <label>Nazwa użytkownika</label>
				<div class="row mt-3 my-3 justify-content-center">
                <input type="text"  placeholder="login" name="uname" style="width: 30%" class="form-control" value="">
                <span class="help-block"></span>
				</div>
            </div>    
            <div class="row mt-3 my-3 justify-content-center">
                <input type="password" class="form-control" placeholder="Hasło"  name="password" style="width: 30%">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Potwierdź"><br>
				<a href="signup.php" class="ca">Utwórz konto</a>
            </div>
			</div>
            <?php if(isset($_GET['error'])){?>
				<p class="error text-danger"><?php echo $_GET['error'];?></p>
			<?php }?>
			
			<?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
			<?php } ?>
        </form>
    </div>
	</div>
	</div>
</body>
</html>