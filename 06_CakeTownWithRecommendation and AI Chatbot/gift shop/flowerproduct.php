<?php
    session_start();
    $database_name = "cart_trial";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="flowerproduct.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="flowerproduct.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>window.location="cartfinal.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products-Flowers</title>
    <link rel="stylesheet" href="styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid black;
            margin: 50px 20px 15px -1px;
            margin-left:70px;
            padding: 20px;
            text-align: center;
            background-color: #efefef;
            width:220px;

        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }

        .img-responsive{

            width:150px;
            height:170px;
        }

        .container{

            display:flex;
            flex-wrap:wrap;
        }

        .form-control{

            width:50px;
        }
        
        
        body{

        background:radial-gradient(#fff,#ffd6d6);
        }

        
        .btn{
            display: inline-block;
            background:radial-gradient(#fff,#ffd6d6);
            color:black;

            padding:8px 30px;
            margin:30px 0;
            border-radius: 30px;
            transition: background 0.5s;
            }

        .btn:hover{
            background:#ffffff;
            }
        .btn1{
            display: inline-block;
            background: #ff523b;
            color:#fff;
            padding:8px 30px;
            margin:30px 0;
            border-radius: 30px;
            transition: background 0.5s;
            }

        .btn1:hover{
            background:#000000;
        }


    </style>
</head>
<body>


<div class="header">
        <div class="container2">
            <div class="navbar">
                <div class="logo">
                    <img src="Caketown logo.png" width="200px" height="200px">
                    </div>
                    <nav>
                        <ul id="MenuItems">
                        <li><a href="indexnwer.php">Home</a></li>
                            <li><a href="comboproduct.php">Products</a></li>
                            <li><a href="contactform.php">Contact</a></li>
                            <li><a href="FAQ.html">FAQ</a></li>
                            
                            <?php 

                            if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {

                                ?><li><a href="reglogin.php">Account</a></li>
                                <?php
                            }

                            else{
                                echo "Welcome, ";
                                echo $_SESSION['username'];?>
                                <li><a href="logout.php">Logout</a></li>


                                <?php
                            }
                            ?>

                            </li>
                            <li><a href="cartfinal.php"><i class="fa fa-shopping-cart" style="font-size:36px;"></i></a></li>

                            
                        </ul>
                    </nav>
                    
                    <img src="cfbg1.jpeg" class="menu-icon" onclick="menutoggle()">
                    </div>
            <div class="row" style="margin-left:20px;padding-left:50px">
                <div class="col-2">
                    <h1>Let your joy burst forth, like flowers in the spring</h1>
                    <p></p>
                    <a href="" class="btn1">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="cakebg1.jpeg" style="padding-right:20px; height: 500px;"> 
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
                    <a href="comboproduct.php"><img src="combo.png" style="border-radius:50%; height:175px;  padding:10px"></a>
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
                <div class="col-5">
                    <a href="antiqueproduct.php"><img src="Antique Logo.jpg" style="border-radius:50%; height:175px; padding:10px"></a>
                    <p style="font-size:24px; text-align: center; color:rgb(255, 95, 78)">Antique Piece</p>
                </div>
            </div>
        </div>
    </div>


     <h2 style="color:black; font-size:28px; background-color:#ffb6c1;">Flowers</h2><br><br>
    <div class="container" style="width: 70%">

        <?php
            $query = "SELECT * FROM product_flower ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="flowerproduct.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart" action="cartfinal.php" method="POST">

                            </div>
                            
                        </form>
                    </div>
                    <?php
                }
            }
        ?>
</div>

<div class="footer">
        <div class="container2">
            <div class="row">
                <div class="footer-col-1" style="margin-left:30px;padding:50px">
                    <h3>Download our APP</h3>

                    <div class="app-logo">
                        <a href="https://play.google.com/store"><img src="playstore.png" style="padding-left:10px; width:40px;"></a>
                        <a href="https://play.google.com/store"><img src="app-store.png" style="padding-left:10px; width:40px;"></a>
                       
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="Caketown logo.png">
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
                        <a href="https://www.instagram.com/"><li>Instagram</li></a><br>
                        <a href="https://www.youtube.com/"><li>YouTube</li></a><br>
                        <a href="https://twitter.com/"><li>Twitter</li></a><br>
                        <a href="https://www.facebook.com/"><li>Facebook</li></a><br>
                    </ul>
    
    
                </div>
            </div>
        </div>
    </div>


</body>
</html>