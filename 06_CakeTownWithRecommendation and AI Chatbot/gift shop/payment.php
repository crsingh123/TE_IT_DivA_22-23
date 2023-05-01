<!DOCTYPE html>
<html>
<head>
<title>Payment Gateway</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .center {
      margin: auto;
      width: 30%;
      padding: 10px;
    }
    h1 {
        text-shadow: 2px 2px 5px rgb(255, 251, 0);
        text-align: center;
    }

    .button1 {
        background-color: white; 
        color: black; 
        border: 2px solid #000000;
        cursor: pointer;
    }

    .button1:hover {
        background-color: #f188c6;;
        color: white;
    }
    </style>
</head>
<body>

<div class="center">
<h1>Payment Gateway</h1><br><br><br>


<a href="https://www.paypal.com/in/home"><button class="button1" style="font-size:24px;width:430px;">PAYPAL <i class="fa fa-paypal"></i></button><br><br></a>
<a href="paymentcheckout.php"><button class="button1" style="font-size:24px;width:430px;">CREDIT/DEBIT CARD <i class="fa fa-credit-card"></i></button><br><br></a>
<a href="thanks.php"><button class="button1" style="font-size:24px;width:430px;">CASH ON DELIVERY <i class="fa fa-rupee"></i></button><br><br></a>
<center>
<a href="cartfinal.php"><button class="button1">Back To Cart</button></a></div>
</center>

</body>
</html>