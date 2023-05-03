
<!DOCTYPE html>
<html>

<head>
    <title>Shoping Cart Mania Products</title>
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
                            <li><a href="">Home</a></li>
                            <li><a href="">Products</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Account</a></li>
                        </ul>
                    </nav>
                    
                    <img src="cfbg1.jpeg" class="menu-icon" onclick="menutoggle()">
                    </div>
     </div>
    <div class="app-container pt-40">

        <div class="top-cart">
            <div class="top-cart__info">
                <div class="top-cart-info__goods"></div>
                <button class="btn-check">Order
                <span class="top-cart-info__item">
                    <span class="red-info">0</span> $</span>
                </button>
            </div>

        </div>
        <!-- /.top-cart -->



        <!--<header class="header">
            <div class="container">
                <h1 class="header__item">CBIKES-SHOP</h1>
            </div>
        </header>-->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 9</div>
            <img src="personalizedgiftsbg.jpg" class="slideimg" style="width:100%">
            <div class="text">Best gifts put together</div>
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">2 / 9</div>
            <img src="cakebg1.jpeg" class="slideimg" style="width:100%">
            <div class="text" style="color:white">Everything we bake, we bake with Love.</div>
            </div>
<div class="mySlides fade">
            <div class="numbertext">3 / 9</div>
            <img src="chocolatebg.jpg" class="slideimg" style="width:100%">
            <div class="text">Delight in Every Bite</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 9</div>
                <img src="greetingbg.jpg" class="slideimg" style="width:100%">
                <div class="text" style="color:white; padding-left:60px;">With thoughtful and meaningful lines</div>
            </div>


<div class="mySlides fade">
                <div class="numbertext" style="color:black">5 / 9</div>
                <img src="flowersbg.jpg" class="slideimg" style="width:100%">
                <div class="text" style="color:white">Let your joy burst forth, like flowers in the spring</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 9</div>
                <img src="plantbg.jpg" class="slideimg" style="width:100%">
                <div class="text">Plant a tree, plant a life</div>
            </div>
<div class="mySlides fade">
                <div class="numbertext">7 / 9</div>
                <img src="mugbg.jpg" class="slideimg" style="width:100%">
                <div class="text">Experience Love at first sip</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">8 / 9</div>
                <img src="personalmugs.jpg" class="slideimg" style="width:100%">
                <div class="text">The mug with which you start your day</div>
            </div>

<div class="mySlides fade">
                <div class="numbertext" style="color:black">9 / 9</div>
                <img src="toybg.jpg" class="slideimg" style="width:100%">
                <div class="text" style="color:white">End of tensions, start of creation</div>
            </div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
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

        </div><br><br>



        <div class="wrap">
            <section class="container">
                <div class="filter-box">
                    <div class="select-box">
                        <div class="select-control">
                            <input type="radio" name="Category" data-value-category="all" id="radio-all"
                                class="category-control" checked>
                            <label class="radio-control" for="radio-all">All Products</label><br>
                            <input type="radio" name="Category" data-value-category="cake" id="radio-cake"
                                class="category-control">
                            <label class="radio-control" for="radio-cake">Cakes</label><br>
                            <input type="radio" name="Category" data-value-category="choco" id="radio-choco"
                                class="category-control">
                            <label class="radio-control" for="radio-choco">Chocolates</label><br>
                            <input type="radio" name="Category" data-value-category="flower" id="radio-flower"
                                class="category-control">
                            <label class="radio-control" for="radio-flower">Flowers</label><br>
                            <input type="radio" name="Category" data-value-category="card" id="radio-card"
                                class="category-control" checked>
                            <label class="radio-control" for="radio-card">Greeting Cards</label><br>
                            <input type="radio" name="Category" data-value-category="mug" id="radio-mug"
                                class="category-control" checked>
                            <label class="radio-control" for="radio-mug">Mugs</label><br>

                        <input type="radio" name="Category" data-value-category="toys" id="radio-toys"
                        class="category-control" checked>
                    <label class="radio-control" for="radio-toys">Toys</label><br>
                        </div>

                    </div><!-- /.select-box -->
                    <div class="price-select-box">
                        <input type="range" min="0" max="3870" value="2850" class="price-control" data-filter='price'>
                        <span class="price-value">price to <span class="price-value__item">3870</span>$</span>
                    </div><!-- /.price-select-box -->
                </div><!-- /filter-box-->



                <div class="products-box grid-box">

                    <div data-category='cake' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>


                    <div data-category='flower' value="1620" class="product-box__item">
                        <h3 class="product-box__title">Predator</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>
                        <div class="product-box__meta">
                            <p>1620 $</p><button class="product-box__btn">ADD TO CART</button>

                        </div>

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>

                    <div data-category='choco' value="780" class="product-box__item">
                        <h3 class="product-box__title">Canyon</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>
                        <div class="product-box__meta">
                            <p>780 $</p><button class="product-box__btn">ADD TO CART</button>

                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>


                    <div data-category='cake' value="1100" class="product-box__item">
                        <h3 class="product-box__title">Coselo</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>
                        <div class="product-box__meta">
                            <p>1100 $</p><button class="product-box__btn">ADD TO CART</button>

                        </div>

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>

                    <div data-category='choco' value="450" class="product-box__item">
                        <h3 class="product-box__title">Gt Cube</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>
                        <div class="product-box__meta">
                            <p>450 $</p><button class="product-box__btn">ADD TO CART</button>

                        </div>

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>

                    <div data-category='cake' value="600" class="product-box__item">
                        <h3 class="product-box__title">Cube Axeal</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>
                        <div class="product-box__meta">
                            <p>600 $</p><button class="product-box__btn">ADD TO CART</button>

                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>


                    <div data-category='choco' value="320" class="product-box__item">
                        <h3 class="product-box__title">Gt 3000</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>
                        <div class="product-box__meta">
                            <p>320 $</p><button class="product-box__btn">ADD TO CART</button>

                        </div>

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>


                    <div data-category='choco' value="500" class="product-box__item">
                        <h3 class="product-box__title">Gt One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>
                        <div class="product-box__meta">
                            <p>500 $</p><button class="product-box__btn">ADD TO CART</button>

                        </div>

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>

                    <div data-category='flower' value="500" class="product-box__item">
                        <h3 class="product-box__title">Gt One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>
                        <div class="product-box__meta">
                            <p>500 $</p><button class="product-box__btn">ADD TO CART</button>

                        </div>

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>


                    <div data-category='choco' value="1250" class="product-box__item">
                        <h3 class="product-box__title">Haibike</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>
                        <div class="product-box__meta">
                            <p>1250 $</p><button class="product-box__btn">ADD TO CART</button>

                        </div>

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>


                    <div data-category='flower' value="1350" class="product-box__item">
                        <h3 class="product-box__title">Kenda XL</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>
                        <div class="product-box__meta">
                            <p>1350 $</p><button class="product-box__btn">ADD TO CART</button>

                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>


                    <div data-category='cake' value="1900" class="product-box__item">
                        <h3 class="product-box__title">Forme Long</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>
                        <div class="product-box__meta">
                            <p>1900 $</p><button class="product-box__btn">ADD TO CART</button>

                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>

                    <div data-category='card' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>

                    </div>

                    <div data-category='card' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>

                    </div>

                    <div data-category='card' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>

                    </div>

                    <div data-category='card' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>

                    <div data-category='card' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>

                    <div data-category='card' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>

                    <div data-category='mug' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>

                    </div>

                    <div data-category='card' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>

                    <div data-category='card' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>

                    <div data-category='card' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>

                    <div data-category='mug' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>

                    
                    <div data-category='mug' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>

                    
                    <div data-category='mug' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>

                    
                    <div data-category='mug' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>

                    

                    <div data-category='toys' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>

                    </div>

                    <div data-category='toys' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>

                    </div>

                    <div data-category='toys' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>

                    <div data-category='toys' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>

                    </div>

                    <div data-category='toys' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>

                    <div data-category='toys' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="cfbg1.jpeg">
                        </div>

                        <div class="product-box__meta">
                           <p>2850 $</p><button class="product-box__btn">ADD TO CART</button>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                    </div>





                </div><!-- /product-box-->

            </section>
        </div>

        <footer class="bottom-footer bg-beetroot py-1">
            <div class="container">
            </div>
        </footer>
    </div><!-- /.app-container -->

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
                    <p>Copyright</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li>Blog</li>
                        <li>Page</li>
                        <li>Guidance</li>
                        <li>Videos</li>
                    </ul>
                </div>
    
                <div class="footer-col-4">
                    <h3>Follow us on</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                        <li>Twitter</li>
                    </ul>
    
    
                </div>
            </div>
        </div>
    </div>
    
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

    <script src="filter.js"></script>
    <script src="cart.js"></script>
</body>

</html>