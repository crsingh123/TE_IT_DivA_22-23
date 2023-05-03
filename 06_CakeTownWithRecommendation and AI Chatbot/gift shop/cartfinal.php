<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #000000;
            background-color: #ffb6c1;
            padding: 2%;
            border:2px solid black;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #ffb6c1;
            font-size:18px;
            border:2px solid black;
        }

        .table{

            width:100%;
        }

        .text-danger{
            text-decoration:none;
            color:black;
        }

        
        .btn{
            display: inline-block;
            background:radial-gradient(#fff,#ffd6d6);
            color:black;
            padding:8px 30px;
            margin:30px 0;
            margin-right:100px;
            margin-top:100px;
            border-radius: 30px;
            transition: background 0.5s;
            font-size:20px;
            border:2px solid black;
            }

        .btn:hover{
            background:#ffffff;
            }
    </style>
</head>

<body>
        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="40%">Product Name</th>
                <th width="5%">Quantity</th>
                <th width="15%">Price Details</th>
                <th width="20%">Total Price</th>
                <th width="20%">Remove Item</th>
            </tr>

            <?php

            session_start();
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>Rs. <?php echo $value["product_price"]; ?></td>
                            <td>
                                Rs. <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="ToysProduct.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">Rs. <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                    
                ?>
            </table>

            <a href="cartsessioncheck.php"><button class="btn btn-success">Proceed</button></a>
            <a href="cakeproduct.php"><button class="btn btn-success">Continue Shopping</button></a>
            <a href="http://localhost:8501/"><button class="btn btn-success">Recommend related items</button></a>
        </div>

    </div>

    </body>

    </html>