<?php
session_start();

?>
<!DOCTYPE html>
<html class="no-js" lang="en-US">
<?php
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true) {
    ?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    
    <title>Mid Term - Project Demo </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="header-holder">
            <header id="Header">
                <div id="Top_bar">
                    <div class="container">
                        <div class="top_bar_left clearfix">
                            <div class="logo">
                                <a id="logo" href="#"><img  src="images/shop.png"alt="shop"/></a>
                            </div>
                            <div class="menu_tab">
                                <nav id="menu">
                                    <ul id="menu-main-menu" class="menu">
                                        <li><a href="#"><span>Home</span></a></li>
                                        <li class="menu-item"><a href="#"><span>For her</span></a>
                                            <ul class="sub-menu">
                                                <li><a class="megamenu-title" href="#"><span>Clothing</span></a>
                                                    <ul class="sub-mega-menu">
                                                        <li ><a href="#"><span>Dresses</span></a></li>
                                                        <li><a href="#"><span>Jackets</span></a></li>
                                                        <li><a href="#"><span>Jeans</span></a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="megamenu-title" href="#"><span>Shoes</span></a>
                                                    <ul class="sub-mega-menu">
                                                        <li><a href="#"><span>Ankle boots</span></a></li>
                                                        <li><a href="#"><span>Ballet pumps</span></a></li>
                                                        <li><a href="#"><span>Heels</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="#"><span>For him</span></a>
                                            <ul class="sub-menu" >
                                                <li><a class="megamenu-title" href="#"><span>Clothing</span></a>
                                                    <ul class="sub--mega-menu">
                                                        <li><a href="#"><span>Hoodies</span></a></li>
                                                        <li><a href="#"><span>Jackets</span></a></li>
                                                        <li><a href="#"><span>Jeans</span></a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="megamenu-title" href="#"><span>Shoes</span></a>
                                                    <ul class="sub-mega-menu">
                                                        <li><a href="#"><span>Ankle boots</span></a></li>
                                                        <li><a href="#"><span>Ballet pumps</span></a></li>
                                                        <li><a href="#"><span>Heels</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="#"><span>About us</span></a></li>
                                        <li class="menu-item"><a href="#"><span>FAQ</span></a></li>
                                        <li class="menu-item"><a href="#"><span>Contact us</span></a></li>
                                   </ul>
                                </nav>
                        </div>
                    </div>
                    <div class="top_bar_right">
                        <div class="search_box">
                            <form>
                                <input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
                            </form>
                        </div>
                        <div class="shopping_cart">
                            <div class="cart">
                                <img class="cpic"src="images/header_cart.png" alt="carp">
                                <a href="#" class="ca" title="View my shopping cart" rel="nofollow">
                                <strong class="opencart"> </strong>
                                <span class="cart_title">Cart</span>
                                <span class="no_product">(empty)</span>
                                </a>
                            </div>
                        </div>
                        <div class="logout">
                            <span><a href="logout.php">Logout</a></span>
                        </div>
                    </div>
                </div>
            </header>
        </div>
</body>