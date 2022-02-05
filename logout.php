<?php

session_start();

if(isset($_SESSION['user_id']))
{
    unset($_SESSION['user_id']);
}

header("Location: login.php");
die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products -RedStroe</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">



</head>
<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/Logo1.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.html">Account</a></li>
    
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>     
</div>
<!--account page-->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/Logo1.png" width="100%" >
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form id="LoginForm"> 
                        <input type="text" placeholder="Username">
                        <input type="password" placeholder="Password">
                        <button type="submit" class="btn">Login </button>
                        <a href="">Forgot password</a>
                    </form>

                    <form id="RegForm">
                        <input type="text" placeholder="Username">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Password">
                        <button type="submit" class="btn">Register </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Where we hiding? </h3>
                <p> St Andrews St, <br/>Bloemfontein Central, <br/>Bloemfontein, 9323 </p>               </div>
            <div class="footer-col-2">
                <img src="images/Logo1.png">
                <p>Our Purpose is to sustainably help you own your beauty.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-3">
                <h3>Follow Us</h3>
                <ul>
                    
                  <i class="fa fa-facebook-square" aria-hidden="true"> Facebook </i>  <br/>
                  <i class="fa fa-twitter" aria-hidden="true"> Twitter </i> <br/>
                  <i class="fa fa-instagram" aria-hidden="true"> Instagram </i> <br/>
                  <i class="fa fa-youtube" aria-hidden="true"> YouTube </i> <br/>
                    
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright"> Sinaye Mbele</p>
    </div>
</div>
<!--js for toggle menu-->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px"
                }
            else
                {
                    MenuItems.style.maxHeight = "0px";
                }    
        }
    </script>
    <!--js for toggle Form-->
    <script>

        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

            function register() {

                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";


            }

            function login() {

                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";


            }   


    </script>

</body>
</html>