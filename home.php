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
		<link rel="shortcut icon" href="https://i.imgur.com/otjevqB.png" type="image/png">
		<script src="https://kit.fontawesome.com/b52c43e2be.js" crossorigin="anonymous"></script>
    </head>
    <body id="body-pd"> 
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <div class="header__img">
                <img src="https://i.imgur.com/otjevqB.png">
            </div>
			<a href="home.php" class="header_login">
                    
                    <span class="nav__name">Sklep Internetowy</span>
			</a>
        </header> 

        <div class="l-navbar" id="nav-bar" >
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <span class="nav__logo-name" style="margin-left:4px;">&#77;</span>
                        <span class="nav__logo-name" style="margin-left:4px;">MENU</span>
                    </a>
                    <div class="nav__list">
                        <a href="#" class="nav__link active">
                            <i class='bx bx-home-alt nav__icon' ></i>
                            <span class="nav__name">Strona Główna</span>
                        </a>
                        <a href="profil.php" class="nav__link">
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

        
		<div class="container"> 
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" src="https://i.imgur.com/aBK3FyC.jpg">
                            <img class="pic-2" src="https://i.imgur.com/aBK3FyC.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Przejrzyj"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Dodaj Do Koszyka"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Wyprzedaż</span>
                        <span class="product-discount-label">20%</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Szajsung telefon</a></h3>
                        <div class="price">$500.00
                            <span>$700.00</span>
                        </div>
                        <a class="add-to-cart" href="">+ Dodaj Do Koszyka</a>
                    </div>
                </div>
				
				
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" src="https://i.imgur.com/Ensamhl.png">
                            <img class="pic-2" src="https://i.imgur.com/Ensamhl.png">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Przejrzyj"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Dodaj Do Koszyka"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Wyprzedaż</span>
                        <span class="product-discount-label">30%</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Zegarek</a></h3>
                        <div class="price">$35.00
                            <span>$100.00</span>
                        </div>
                        <a class="add-to-cart" href="">+ Dodaj Do Koszyka</a>
                    </div>
                </div>
				
				<div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" src="https://i.imgur.com/jNKgsqp.jpg">
                            <img class="pic-2" src="https://i.imgur.com/jNKgsqp.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Przejrzyj"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Dodaj Do Koszyka"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Wyprzedaż</span>
                        <span class="product-discount-label">30%</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Podświetlana Klawiatura</a></h3>
                        <div class="price">$100.00
                            <span>$200.00</span>
                        </div>
                        <a class="add-to-cart" href="">+ Dodaj Do Koszyka</a>
                    </div>
                </div>
				
				<div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" src="https://i.imgur.com/fps38g5.jpeg">
                            <img class="pic-2" src="https://i.imgur.com/fps38g5.jpeg">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Przejrzyj"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Dodaj Do Koszyka"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Wyprzedaż</span>
                        <span class="product-discount-label">30%</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Monitor ASUS ProArt</a></h3>
                        <div class="price">$200.00
                            <span>$300.00</span>
                        </div>
                        <a class="add-to-cart" href="">+ Dodaj Do Koszyka</a>
                    </div>
                </div>
				
            </div>
           
        </div>
    </div> 
	
<br><br>		 

        
        <!--===== MAIN JS =====-->
        <script src="main.js"></script>
    </body>
</html>






<?php }else{
	header("Location: logiin.php");
	exit();
}?>
