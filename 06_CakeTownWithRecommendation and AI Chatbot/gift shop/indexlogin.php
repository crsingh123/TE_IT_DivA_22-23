<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart Mania</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapi.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="giftbg.png" width="125px">
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="indexlogin.php">Home</a></li>
                            <li><a href="productslogin.php">Products</a></li>
                            <li><a href="contactform.php">Contact</a></li>
                            <li><a href="FAQ.html">FAQ</a></li>
                            
                            <?php 
                            echo "Welcome, ";
                            echo $_SESSION['username'];

                            ?>
                            </li>
                            <li><a href="logout.php">logout</a></li>
                            <li><a href="cartfinal.php.php"><i class="fa fa-shopping-cart" style="font-size:36px;"></i></a></li>
                        </ul>
                    </nav>
                    <img src="cfbg1.jpeg" class="menu-icon" onclick="menutoggle()">
                    </div>
            <div class="row">
                <div class="col-2">
                    <h1>Gifts that you imagine</h1>
                    
                    <a href="" class="btn55">Explore Now &#8594;</a>
                </div>
                <div class="col-2">

                </div>
            
            </div>
        </div>
     </div>

     <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                <a href="cakeproduct.php"><img src="birthday-cake (1).png" style="border-radius:50%; height:175px; padding:10px"></a>
                    <p style="font-size:24px; text-align: center; color:rgb(255, 95, 78)">Cake</p>
                </div>
                <div class="col-5">
                <a href="chocolateproduct.php"><img src="chocolate (1).png" style="border-radius:50%; height:175px;  padding:10px"></a>
                    <p style="font-size:24px; text-align: center; color:rgb(255, 95, 78)">Chocolate</p>
                </div>
                <div class="col-5">
                <a href="ToysProduct.php"><img src="toys (1).png" style="border-radius:50%; height:175px;  padding:10px"></a>
                    <p style="font-size:24px; text-align: center; color:rgb(255, 95, 78)">Toys</p>
                </div>

                <div class="col-5">
                <a href=""><img src="combo.png" style="border-radius:50%; height:175px;  padding:10px">  </a>   

                    <p style="font-size:24px; text-align: center; color:rgb(255, 95, 78)">Combo</p>
                </div>
                <div class="col-5">
                <a href="flowerproduct.php"><img src="flower (1).png" style="border-radius:50%; height:175px;  padding:10px"></a>
                    <p style="font-size:24px; text-align: center; color:rgb(255, 95, 78)">Flowers</p>
                </div>
                <div class="col-5">
                <a href="mugproduct.php"><img src="hot-cup.png" style="border-radius:50%; height:175px;  padding:10px"></a>
                    <p style="font-size:24px; text-align: center; color:rgb(255, 95, 78)">Mugs</p>
                </div>
            </div>
        </div>
    </div>

<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="designcake.png" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusively Avaliable at Cake Town</p>
                <h1>Design Your Own Cake</h1>
                <small>We are exclusively providing the customers an option to design your own cake so explore it.It is a unique experience and you would Surely Enjoy it. </small>
                <a href="sessioncheck.php" class="btn55">Experience Now &#8594</a>
            </div>
        </div>
    </div>
</div>

<div class="offer1">
    <div class="small-container">
        <div class="row">
            <div class="col-10">
                <img src="kitchen.jpg" class="offer-img2">
            </div>
            <div class="col-10">
                <h1>About Our Kitchen Hygiene</h1><br><br>
                <small>While we have always followed hygiene regime at gift mania we have taken a few specific measures at these times. Our kitchen executives have been instructed to wear masks at all times. A daily log of our executives body temperatures is being maintained. Every Kitchen surface is rigourously cleaned to ensure a clean and sanitiized workspace. We provide very safe and contact-less delivery.</small>
                
            </div>
        </div>
    </div>
</div>

<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>I had a very fanstastic experience at GiftMania.All the gift items are avaliablle under one website.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="womanisha.png">
                <h3>Isha</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Bought a cake the other day for an event.Tasted very well and the service was great.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="womanap.png">
                <h3>Apoorva</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>I tried the design your own cake option turned out to be good and there where a lot of varieties.A unique experience to try and Buy again.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="womanmansi.png">
                <h3>Mansi</h3>
            </div>
        </div>
    </div>
</div>

<div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our APP</h3>
                    <p>Download app for mobile and tablet</p>
                    <div class="app-logo">
                        <a href="https://play.google.com/store"><img src="playstore.png" style="padding-left:10px; width:40px;"></a>
                        <a href="https://play.google.com/store"><img src="app-store.png" style="padding-left:10px; width:40px;"></a>
                       
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="giftfooter.png">
                    <p>Copyright @2023 </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful links</h3><br>
                    <ul>
                        <a href="https://thecakeblog.com/"><li>Blog</li></a><br>
                        <a href="https://blog.doyourthng.com/2022/01/13/10-cake-bakers-on-instagram-from-delhi/"><li>Page</li></a><br>
                        <a href="https://thecakeblog.com/category/baking-tips"><li>Guidance</li></a><br>
                        <a href="https://www.youtube.com/@CakeCakeIdeas/videos"><li>Videos</li></a><br>
                    </ul>
                </div>
    
                <div class="footer-col-4">
                    <h3>Follow us on</h3><br>
                    <ul>
                        <a href="https://www.facebook.com/"><li>Facebook</li></a><br>
                        <a href="https://www.instagram.com/"><li>Instagram</li></a><br>
                        <a href="https://www.youtube.com/"><li>YouTube</li></a><br>
                        <a href="https://twitter.com/"><li>Twitter</li></a><br>
                    </ul>
    
    
                </div>
            </div>
        </div>
    </div>

   
</body>

</html>  