<?php

include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makan Cuy</title>
    <!-- Link Css -->
    <link rel="stylesheet" href="css/landing.css">
    <!-- Link Icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- link swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="ico/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="ico/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="ico/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="ico/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="ico/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="ico/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="ico/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="ico/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="ico/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="ico/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="ico/mstile-310x310.png" />
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div><a href="#" class="logo">Makan Cuy</a></div>
        <div class="box-menu" id="menu-icon">
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#">Popular</a></li>
                <li><a href="#">Promo</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Pesan</a></li>
            </ul>
        </div>
        <img src="img/moon.png" id="icon">
    </nav>

    <section class="home" id="home">
        <div class="hero">
            <div class="home-text">
                <h2>Makan Cuy!</h2>
                <h3>Get the best variety of food here</h3>
                <p>the tasty food of your choice</p>
                <a href="" class="btn">View Menu</a>
            </div>
            <div class="hero-img">
                <img src="images/burgir.png" class="parallax" data-speed="2" alt="">
            </div>
        </div>
    </section>

    <section class="promo" id="promo">
        <div class="promo-text">
            <h2>Food <span>Promo</span> This Month !</h2>
        </div>

        <div class="promo-card">
            <div class="card">

                <img src="images/pexels-horizon-content-3738755.jpg" alt="">
                <h3>Combo Double</h3>
                <span><p>2 Black Burger + Frenc Fries</p></span>
                <h4>Rp. 34.000</h4>
                <br>
                <a href="">Beli sekarang</a>
            </div>
    </section>

    <div class="text-slidder">
        <h2><span>News</span> In this week</h2>
    </div>
    <br>
    <div class="body">
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
    
                <div class="slide first">
                    <img src="images/Group 5.png" alt="">
                </div>
                <div class="slide ">
                    <img src="images/Group 6.png" alt="">
                </div>
                <div class="slide ">
                    <img src="images/Group 8.png" alt="">
                </div>
                <div class="slide ">
                    <img src="images/Group 7.png" alt="">
                </div>
    
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
    
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>
    </div>



    <section class="menu" id="menu">
        <div class="heading-menu">
            <h2>Best <span>Menu</span> Of The Week !</h2>
        </div>

        <div class="container">
            <div class="products-container">
                <div class="product" data-name="p-1">
                    <img src="img/chicken.png" alt="">
                    <h3>Tacco Mexxico</h3>
                </div>

                <div class="product" data-name="p-2">
                    <img src="img/taco-1.svg" alt="">
                    <h3>Tacco Mexxico</h3>
                </div>

                <div class="product" data-name="p-3">
                    <img src="img/burger.png" alt="">
                    <h3>Tacco Mexxico</h3>
                </div>
            </div>

        </div>

    </section>



    <div class="products-preview">

        <div class="preview" data-target="p-1">
            <i class='bx bx-x'></i>
            <img src="img/taco-1.svg" alt="">
            <h3>organic strawberries</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        </div>

        <div class="preview" data-target="p-2">
            <i class='bx bx-x'></i>
            <img src="img/taco-1.svg" alt="">
            <h3>organic onions</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        </div>

        <div class="preview" data-target="p-3">
            <i class='bx bx-x'></i>
            <img src="img/taco-1.svg" alt="">
            <h3>organic tomatoes</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        </div>
    </div>


    <!-- Footer -->
    <section class="footer" id="footer">
        <div class="contact-box">
            <h3><span>Food Test</span></h3>
            <span>Connect With Us</span>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
            </div>
        </div>
        
        <div class="contact-box menu">
            <h3>Menu Links</h3>
            <li><a href="#">Home</a></li>
                <li><a href="#">Popular</a></li>
                <li><a href="#">Promo</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Pesan</a></li>
        </div>
        
        <div class="contact-box address">
            <h3>Contact</h3>
            <i class='bx bxs-phone' ><span>+62 888 999 888 </span></i>
            <i class='bx bxs-map'><span>Street Panglima Polim, Jakarta</span></i>
            <i class='bx bx-envelope' ><span>makancuy@gmail.com</span></i>
        </div>

    </section>





    <div class="promo-card">
        <div class="card">
            <img src="" alt="">
            <p></p>
        </div>
    </div>




    <!-- Link Javascript -->
    <script src="js/app.js" defer></script>
    <script src="js/slider.js"></script>
</body>

</html>