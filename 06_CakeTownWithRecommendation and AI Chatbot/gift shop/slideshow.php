<!DOCTYPE html>
<html>
    <head>
        <title>The Generics | About</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <style>

                    * {box-sizing:border-box}

                    /* Slideshow container */
                    .slideshow-container {
                    max-width: 80%;
                    
                    position: relative;
                    margin: auto;
                    }

                    /* Hide the images by default */
                    .mySlides {
                    display: none;
                    }

                    /* Next & previous buttons */
                    .prev, .next {
                    cursor: pointer;
                    position: absolute;
                    top: 50%;
                    width: auto;
                    margin-top: -22px;
                    padding: 16px;
                    color: white;
                    font-weight: bold;
                    font-size: 18px;
                    transition: 0.6s ease;
                    border-radius: 0 3px 3px 0;
                    user-select: none;
                    }

                    /* Position the "next button" to the right */
                    .next {
                    right: 0;
                    border-radius: 3px 0 0 3px;
                    }

                    /* On hover, add a black background color with a little bit see-through */
                    .prev:hover, .next:hover {
                    background-color: rgba(0,0,0,0.8);
                    }

                    /* Caption text */
                    .text {
                    color: #f2f2f2;
                    font-size: 30px;
                    padding: 8px 12px;
                    position: absolute;
                    bottom: 8px;
                    width: 100%;
                    text-align: center;
                    background-color: black;
                
                    }

                    /* Number text (1/3 etc) */
                    .numbertext {
                    color: #f2f2f2;
                    font-size: 12px;
                    padding: 8px 12px;
                    position: absolute;
                    top: 0;
                    }

                    /* The dots/bullets/indicators */
                    .dot {
                    cursor: pointer;
                    height: 15px;
                    width: 15px;
                    margin: 0 2px;
                    background-color: #bbb;
                    border-radius: 50%;
                    display: inline-block;
                    transition: background-color 0.6s ease;
                    }

                    .active, .dot:hover {
                    background-color: #717171;
                    }

                    /* Fading animation */
                    .fade {
                    -webkit-animation-name: fade;
                    -webkit-animation-duration: 1.5s;
                    animation-name: fade;
                    animation-duration: 1.5s;
                    }

                    @-webkit-keyframes fade {
                    from {opacity: .4}
                    to {opacity: 1}
                    }

                    @keyframes fade {
                    from {opacity: .4}
                    to {opacity: 1}
                    }

                    img{

                        height:600px;
                       
                    }
        </style>
    </head>
    <body>
        <nav class="nav main-nav">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="store.html">STORE</a></li>
                <li><a href="about.html">ABOUT</a></li>
            </ul>
        </nav>

           

             <!-- Slideshoq -->

                                    <!-- Slideshow container -->
                                    <div class="slideshow-container">

                                        <!-- Full-width images with number and caption text -->
                                        <div class="mySlides fade">
                                        <div class="numbertext">1 / 9</div>
                                        <img src="personalizedgiftsbg.jpg" style="width:100%">
                                        <div class="text">Best gifts put together</div>
                                        </div>
                                    
                                        <div class="mySlides fade">
                                        <div class="numbertext">2 / 9</div>
                                        <img src="cakebg1.jpeg" style="width:100%">
                                        <div class="text" style="color:white">Everything we bake, we bake with Love.</div>
                                        </div>
                                    
                                        <div class="mySlides fade">
                                        <div class="numbertext">3 / 9</div>
                                        <img src="chocolatebg.jpg" style="width:100%">
                                        <div class="text">Delight in Every Bite</div>
                                        </div>

                                        <div class="mySlides fade">
                                            <div class="numbertext">4 / 9</div>
                                            <img src="greetingbg.jpg" style="width:100%">
                                            <div class="text" style="color:white; padding-left:60px;">With thoughtful and meaningful lines</div>
                                        </div>

                                        <div class="mySlides fade">
                                            <div class="numbertext" style="color:black">5 / 9</div>
                                            <img src="flowersbg.jpg" style="width:100%">
                                            <div class="text" style="color:white">Let your joy burst forth, like flowers in the spring</div>
                                        </div>

                                        <div class="mySlides fade">
                                            <div class="numbertext">6 / 9</div>
                                            <img src="plantbg.jpg" style="width:100%">
                                            <div class="text">Plant a tree, plant a life</div>
                                        </div>

                                        <div class="mySlides fade">
                                            <div class="numbertext">7 / 9</div>
                                            <img src="mugbg.jpg" style="width:100%">
                                            <div class="text">Experience Love at first sip</div>
                                        </div>

                                        <div class="mySlides fade">
                                            <div class="numbertext">8 / 9</div>
                                            <img src="personalmugs.jpg" style="width:100%">
                                            <div class="text">The mug with which you start your day</div>
                                        </div>

                                        <div class="mySlides fade">
                                            <div class="numbertext" style="color:black">9 / 9</div>
                                            <img src="toybg.jpg" style="width:100%">
                                            <div class="text" style="color:white">End of tensions, start of creation</div>
                                        </div>

                                        
                                    
                                        <!-- Next and previous buttons -->
                                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                    </div>
                                    <br>
                                    
                                    <!-- The dots/circles -->
                                    <div style="text-align:center">
                                        <span class="dot" onclick="currentSlide(1)"></span>
                                        <span class="dot" onclick="currentSlide(2)"></span>
                                        <span class="dot" onclick="currentSlide(3)"></span>
                                        <span class="dot" onclick="currentSlide(4)"></span>
                                        <span class="dot" onclick="currentSlide(5)"></span>
                                        <span class="dot" onclick="currentSlide(6)"></span>
                                        <span class="dot" onclick="currentSlide(7)"></span>
                                        <span class="dot" onclick="currentSlide(8)"></span>
                                        <span class="dot" onclick="currentSlide(9)"></span>

                                    </div>
                
                                <ul class="nav footer-nav">
                                    <li>
                                        <a href="https://www.youtube.com" target="_blank">
                                            <img src="Images/YouTube Logo.png">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.spotify.com" target="_blank">
                                            <img src="Images/Spotify Logo.png">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com" target="_blank">
                                            <img src="Images/Facebook Logo.png">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="section-header">ABOUT</h2>

        
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">The Generics</h3>
                

               
        </footer>

        <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                // Next/previous controls
                function plusSlides(n) {
                showSlides(slideIndex += n);
                }

                // Thumbnail image controls
                function currentSlide(n) {
                showSlides(slideIndex = n);
                }

                function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                }
        </script>
    </body>
</html>