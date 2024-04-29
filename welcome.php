<?php

 include 'connect.php';
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee House</title>
    <style>
        body {
            margin: 0;
            font-family: 'poppin', sans-serif;
            background-color: #99582a
        }

        header {
            background-color: #99582a;
            color: #fff;
            padding: 10px 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            border-bottom: 2px solid #6f1d1b;
        }

        .logo a {
            color: #341D11;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: bold;
            font-family: Blackadder ITC;
            padding: 20% 60%;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links a {
            color: #6f1d1b;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-links a.active {
            border-bottom: 2px solid #341D11;
        }

        .nav-links a.Shop {
            display: inline-block;
            color: #6f1d1b;
            border: 4px solid;
            transition: .4s ease-in-out;
            border-radius: 3px;
        }

        .nav-links a:hover {
            background-color: #bb9457;
        }

        .home-section {
            background-image: url(home.webp);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: calc(100vh-100px);
            display: flex;
            align-items: center;
            position: relative;
            left: +100%;
            transition: 1s ease-in-out;
        }

        h1 {
            color: #6f1d1b;
            padding: 0 20px;
        }

        p {
            color: #6f1d1b;
            padding: 0 20px;
            font-size: large;
            font-weight: bold;
        }

        .home-link {
            display: flex;
        }

        .home-link a {
            text-decoration: none;
            text-transform: capitalize;
            border-radius: 5px;
            padding: 11px 2px;
        }

        .first a {

            margin: 20px;
            background: transparent;
            border-color: #6f1d1b;
            color: #341D11;
            display: inline-block;
            border: 4px solid;
            transition: .4s ease-in-out;
            border-radius: 3px;
            font-weight: bolder;
        }

        .first a:hover {
            background-color: #bb9457;
        }

        @media(max-width: 768px) {
            .home-section h1 {
                font-size: 3rem;
            }
        }

        @media(max-width: 576px) {
            .home-section h1 {
                font-size: 2rem;
            }

            .home-section p {
                font-size: 13px;
            }

            .home-section h1 br {
                display: none;
            }
        }

        @media(max-width: 350px) {
            .home-link {
                flex-direction: column;
                grid-row-gap: 15px;
            }
        }

        .bg-services {
            width: 90%;
            margin: 100px auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            grid-row-gap: 20px;
            flex-wrap: wrap;
        }

        .service-one {
            width: 32%;
            position: relative;
            overflow: hidden;
        }

        .service-one img {
            width: 100%;
            height: 300px;
            transition: 1s ease-in-out;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .over-txt {
            position: absolute;
            bottom: 30px;
            text-align: center;
            width: 100%;
        }

        .over-txt p {
            margin: 0;
            text-transform: capitalize;
        }

        .over-txt h4 {
            text-transform: capitalize;
        }

        .service-one:hover img {
            transform: scale(1.1);
        }

        @media(max-width: 991) {
            .bg-services .service-one {
                width: 49%;
            }
        }

        @media(max-width: 576) {
            .bg-services .service-one {
                width: 100%;
            }
        }
        .bg-shop{
            width: 90%;
            margin: 100px auto;
        }
        .shop-links{
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
            align-items: center;
            color: #6f1d1b;
        }
        .shop-links h2{
            text-transform: capitalize;
            font-family: 'poppin', sans-serif;
        }
        .links{
            display: flex;
            align-items: center;
        }
        .links li{
            margin-left: 20px;
            text-transform: uppercase;
            cursor: pointer;
            transition: .4s ease-in-out;
        }
        .links li:hover{
            color: #bb9457;
            font-weight: bold;
        }
        .shop-flex{
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            grid-row-gap: 20px;
        }
        .shop1{
            width: 24%;
            color: #341D11;
        }
        .shop-image{
            position: relative;
            overflow: hidden;
            padding: 50px 20px;
            margin-bottom: 20px;
        }
        .shop-image img{
            width: 100%;
        }
        .price{
            position: absolute;
            top: 15px;
            right: 15px;
            border: 1px solid #99582a;
            padding: 8px 11px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
        }
        .shop1 h2{
            text-transform: capitalize;
            font-size: 1.2rem;
        }
        .shop1 article{
            font-size: 16px;
            font-weight: bold;
            margin-right: 5px;
            display: inline-block;
        }
        .shop1 span{
            font-size: medium;
            color: #6f1d1b;
            text-decoration: line-through;
        }
        .bg-menu{
           background-color: #bb9457;
            background-position: center;
            padding: 50px 0px;
        }
        .menu-title{
            margin-bottom: 50px;
            text-align: center;
            color: #6f1d1b;
        }
        .menu-title section{
            text-transform: uppercase;
            font-size: 15px;
            color: #6f1d1b;
            font-weight: bolder;
        }
        hr{
            margin: 15px auto;
            width: 150px;

        }
        .menu-flex{
            width: 90%;
            margin: 0px auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .menu1{
            width: 49%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #6f1d1b;
            margin-bottom: 20px;
        }
        .menu1 img{
            width: 250px;
        }
        .line h4{
            margin-top: 10px;
            border-top: 1px;
            width: 52%;
        }
        #footer {
        background-color: #292929;
        color: #fff;
        padding: 50px 0;
        }

        .footer-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        }

        .footer-section {
        flex: 1;
        margin: 0 20px;
        }

        .footer-section h2 {
        margin-bottom: 15px;
        }

        .social-links a {
        color: #fff;
        font-size: 24px;
        margin-right: 10px;
        }

        .links ul {
        list-style: none;
        }

        .links ul li {
        margin-bottom: 10px;
        }

        .links ul li a {
        color: #fff;
        text-decoration: none;
        }

        .contact-form textarea {
        height: 100px;
        resize: none;
        }

        .footer-bottom {
        background-color: #1a1a1a;
        padding: 10px 0;
        text-align: center;
        color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <div class="logo">
                    <a href="#">HeavenlyCoffee</a>
                </div>
                <ul class="nav-links">
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#" class="Shop">Shop Now</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="home-section">
        <div class="home-content">
            <h1>All You Need To <br> Feel Better Is a <br>Cup of Coffee</h1>
            <p>Affordable prices for all<br>to start your day <br>with coffee</p>
        </div>
        <div class="home-link">
            <div class="first">
                <a href="#">Order Now</a>
            </div>
        </div>
    </div>
    <div class="bg-services">

        <div class="service-one">
            <img src="coffee.jpg" alt="">
            <div class="overlay">
                <div class="over-txt">
                    <a href="./coffee.html" style="text-decoration: none">
                        <p style="color:  #341D11;">For drinks</p>
                        <h4 style="color: #fff;">Coffes & Teas</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="service-one">
            <img src="sandwhich.webp" alt="">
            <div class="overlay">
                <div class="over-txt">
                    <p style="color:  black;">For Appetite</p>
                    <h4 style="color: #fff;">Sandwhiches & Snacks</h4>
                </div>
            </div>
        </div>
        <div class="service-one">
            <img src="cake.webp" alt="">
            <div class="overlay">
                <div class="over-txt">
                    <p style="color:  #fff;">For Sweet</p>
                    <h4 style="color: burlywood;">Cakes & Pastaries</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-shop">
        <div class="shop-links">
            <div>
                <h2>products</h2>
            </div>
            <div class="links">
                <li data-filter="all">all</li>
                <li data-filter=".coffee">coffee</li>
                <li data-filter=".snacks">snacks</li>
                <li data-filter=".cakes">cakes</li>
            </div>
        </div>
        <div class="shop-flex consts">
            <div class="shop1 mix coffee">
                <div class="shop-image">
                    <img src="black coffee.jpg" alt="">
                    <div class="price">
                        -7%
                    </div>
                </div>
                <h2>Black coffee</h2>
                <article>$32</article>
                <span>$45</span>
            </div>

            <div class="shop1 mix coffee">
                <div class="shop-image">
                    <img src="Americano.jpg" alt="">
                    <div class="price">
                        -12%
                    </div>
                </div>
                <h2>Americani</h2>
                <article>$82</article>
                <span>$95</span>
            </div>

            <div class="shop1 mix coffee">
                <div class="shop-image">
                    <img src="coffee with milk.jpg" alt="">
                    <div class="price">
                        -10%
                    </div>
                </div>
                <h2>Coffee with milk</h2>
                <article>$92</article>
                <span>$75</span>
            </div>

            <div class="shop1 mix coffee">
                <div class="shop-image">
                    <img src="mocha-latte-12.jpg" alt="">
                    <div class="price">
                        -7%
                    </div>
                </div>
                <h2>Mocha</h2>
                <article>$32</article>
                <span>$45</span>
            </div>



            <div class="shop1 mix snacks">
                <div class="shop-image">
                    <img src="bur.jpg" alt="">
                    <div class="price">
                        -7%
                    </div>
                </div>
                <h2>Burger</h2>
                <article>$32</article>
                <span>$45</span>
            </div>

            <div class="shop1 mix snacks">
                <div class="shop-image">
                    <img src="pas.jpg" alt="">
                    <div class="price">
                        -7%
                    </div>
                </div>
                <h2>pasta</h2>
                <article>$32</article>
                <span>$45</span>
            </div>

            <div class="shop1 mix snacks">
                <div class="shop-image">
                    <img src="fries.webp" alt="">
                    <div class="price">
                        -7%
                    </div>
                </div>
                <h2>Fries</h2>
                <article>$32</article>
                <span>$45</span>
            </div>

            <div class="shop1 mix snacks">
                <div class="shop-image">
                    <img src="sand.jpg" alt="">
                    <div class="price">
                        -7%
                    </div>
                </div>
                <h2>Sandwhich</h2>
                <article>$32</article>
                <span>$45</span>
            </div>

            <div class="shop1 mix cakes">
                <div class="shop-image">
                    <img style="width: 80%;" src="donut.jpg" alt="">
                    <div class="price">
                        -7%
                    </div>
                </div>
                <h2>Donuts</h2>
                <article>$32</article>
                <span>$45</span>
            </div>

            <div class="shop1 mix cakes">
                <div class="shop-image">
                    <img src="cupcake.jpg" alt="">
                    <div class="price">
                        -7%
                    </div>
                </div>
                <h2>cupcake</h2>
                <article>$32</article>
                <span>$45</span>
            </div>

            <div class="shop1 mix cakes">
                <div class="shop-image">
                    <img src="chocolate.jpeg" alt="">
                    <div class="price">
                        -7%
                    </div>
                </div>
                <h2>Cake</h2>
                <article>$32</article>
                <span>$45</span>
            </div>

            <div class="shop1 mix cakes">
                <div class="shop-image">
                    <img src="pineapple.jpg" alt="">
                    <div class="price">
                        -7%
                    </div>
                </div>
                <h2>Pineapple<br>cake</h2>
                <article>$32</article>
                <span>$45</span>
            </div>
            <div class="bg-menu">
                <div class="menu-title">
                    <section>What we serve</section>
                    <h2>TIME FOR COFFEE</h2>
                    <hr>
                </div>
                <div class="menu-flex">
                    <div class="menu1">
                        <div class="small-image">
                            <img src="mocha-latte-12.jpg" alt="">
                        </div>
                        <div>
                            <h4>Coffee Mocha</h4>
                        </div>
                        <div class="line">
                            <h4>$3.65</h4>
                        </div>
                    </div>

                    <div class="menu1">
                        <div class="small-image">
                            <img src="coffee.jpg" alt="">
                        </div>
                        <div>
                            <h4>Coffee</h4>
                        </div>
                        <div class="line">
                            <h4>$2.28</h4>
                        </div>
                    </div>

                    <div class="menu1">
                        <div class="small-image">
                            <img src="coffee with milk.jpg" alt="">
                        </div>
                        <div>
                            <h4>Coffee with Milk</h4>
                        </div>
                        <div class="line">
                            <h4>$7.25</h4>
                        </div>
                    </div>

                    <div class="menu1">
                        <div class="small-image">
                            <img src="Americano.jpg" alt="">
                        </div>
                        <div>
                            <h4>Americano</h4>
                        </div>
                        <div class="line">
                            <h4>$5.65</h4>
                        </div>
                    </div>

                    <div class="menu1">
                        <div class="small-image">
                            <img src="Hot-Coffee.jpg" alt="">
                        </div>
                        <div>
                            <h4>Hot Coffee</h4>
                        </div>
                        <div class="line">
                            <h4>$6025</h4>
                        </div>
                    </div>

                    <div class="menu1">
                        <div class="small-image">
                            <img src="turk coffee.webp" alt="">
                        </div>
                        <div>
                            <h4>Turk Coffee</h4>
                        </div>
                        <div class="line">
                            <h4>$8.25</h4>
                        </div>
                    </div>
                </div>
            </div>


           <div class="bg-menu">
                <div class="menu-title">
                    <h2>TIME FOR SNACKS</h2>
                    <hr>
                </div>
                <div class="menu-flex">
                    <div class="menu1">
                        <div class="small-image">
                            <img src="pas.jpg" alt="">
                        </div>
                        <div>
                            <h4>Pasta</h4>
                        </div>
                        <div class="line">
                            <h4>$5.565</h4>
                        </div>
                    </div>

                    <div class="menu1">
                        <div class="small-image">
                            <img src="bur.jpg" alt="">
                        </div>
                        <div>
                            <h4>Burger</h4>
                        </div>
                        <div class="line">
                            <h4>$8.25</h4>
                        </div>
                    </div>

                    <div class="menu1">
                        <div class="small-image">
                            <img src="fries.webp" alt="">
                        </div>
                        <div>
                            <h4>Fries</h4>
                        </div>
                        <div class="line">
                            <h4>$7.25</h4>
                        </div>
                    </div>

                    <div class="menu1">
                        <div class="small-image">
                            <img src="pizza.jpg" alt="">
                        </div>
                        <div>
                            <h4>Pizza</h4>
                        </div>
                        <div class="line">
                            <h4>$10</h4>
                        </div>
                    </div>

                    <div class="menu1">
                        <div class="small-image">
                            <img src="san.jpg" alt="">
                        </div>
                        <div>
                            <h4>Sandwhich</h4>
                        </div>
                        <div class="line">
                            <h4>$11</h4>
                        </div>
                    </div>

                    <div class="menu1">
                        <div class="small-image">
                            <img src="shawma.jpg" alt="">
                        </div>
                        <div>
                            <h4>Wrap</h4>
                        </div>
                        <div class="line">
                            <h4>$8.25</h4>
                        </div>
                    </div>
                </div>
           </div>
           
        <div class="bg-menu">
            <div class="menu-title">
                <h2>TIME FOR SWEET</h2>
                <hr>
            </div>
            <div class="menu-flex">
                <div class="menu1">
                    <div class="small-image">
                        <img src="donut.jpg" alt="">
                    </div>
                    <div>
                        <h4>Donuts</h4>
                    </div>
                    <div class="line">
                        <h4>$12</h4>
                    </div>
                </div>

                <div class="menu1">
                    <div class="small-image">
                        <img src="chocolate.jpeg" alt="">
                    </div>
                    <div>
                        <h4>Chocolate cake</h4>
                    </div>
                    <div class="line">
                        <h4>$5.8</h4>
                    </div>
                </div>

                <div class="menu1">
                    <div class="small-image">
                        <img src="cupcake.jpg" alt="">
                    </div>
                    <div>
                        <h4>Cupcakes</h4>
                    </div>
                    <div class="line">
                        <h4>$8.25</h4>
                    </div>
                </div>

                <div class="menu1">
                    <div class="small-image">
                        <img src="Cappuccino-Cake_-13.jpg" alt="">
                    </div>
                    <div>
                        <h4>Coffee Cake</h4>
                    </div>
                    <div class="line">
                        <h4>$20</h4>
                    </div>
                </div>

                <div class="menu1">
                    <div class="small-image">
                        <img src="fruit.jpg" alt="">
                    </div>
                    <div>
                        <h4>Friut Cake</h4>
                    </div>
                    <div class="line">
                        <h4>$8.25</h4>
                    </div>
                </div>

                <div class="menu1">
                    <div class="small-image">
                        <img src="red.jpg" alt="">
                    </div>
                    <div>
                        <h4>Red Velvet Cake</h4>
                    </div>
                    <div class="line">
                        <h4>$8.25</h4>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <footer id="footer">
            <div class="container">
              <div class="footer-content">
                <div class="footer-section about">
                  <h2>About Us</h2>
                  <p>We are passionate about coffee and strive to provide the best coffee experience to our customers.</p>
                
                </div>
                <div class="footer-section links">
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
                <div class="footer-section contact-form">
                  <h2>Contact Us</h2>
                  <ul>
                    <li><a href="#">heavenlycoffee@gmail.com</a></li>
                    <li><a href="#">03258746996</a></li>
                    <li><a href="#">Lahore pakistan</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-bottom"></div>
          </footer>
    
<script src="mixitup.min.js"></script>
<script>
    var mixer = mixitup('.consts');
</script>
        <script>
            window.onload = () => {
                let homeSection = document.querySelector(".home-section");
                homeSection.style.left = "50px"
            }
            <!-- Add this script inside the <head> section of your HTML file -->

            document.addEventListener("DOMContentLoaded", function () {
                const navbar = document.getElementById("navbar");
                const navLinks = document.querySelector(".nav-links");
                function toggleMenu() {
                    navLinks.classList.toggle("show");
                }

                navbar.addEventListener("click", toggleMenu);
            });
        </script>
</body>

</html>