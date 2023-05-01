<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styleindex.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Payment</title>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background: url("paymentgateway.jpg");
}
* {
  margin: 0;
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}


.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
  display: block;
}



.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 300%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  background: white;
  
}

input[type=date] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  background: white;
}

input[type=password] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  background: white;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}



span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}    
#box1{
border: 2px double rgb(0, 0, 0);
padding: 5px;
margin-left: 15%;
margin-top: 7%;
width: 70%;
height: 80%;
background:rgba(211, 211, 211, 0.8)



}

.proceed{

    color:white;
    background-color: black;
    text-decoration: none;
    padding:10px 20px;
    font-size: 20px;
    margin-left:460px;
    display:block;
    border-radius: 10px;
    cursor: pointer;
}
</style>
</head>
<body>

  <form action="checkout.php" method="POST">

    <fieldset id="box1">
          <div class="col-5">
              <h3><u>Payment</u></h3>
          
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <form action="">
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Name on the card" pattern="[a-zA-Z]+" title="Alphabets only" required>
            <label for="ccnum">Card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Card Number" pattern="[0-9]{13,16}" title="13 to 16 digits long" required>
 
            <div class="row">
              <div class="col-50">
                <label for="expyear">Expiry Year</label>
                <input type="date" id="expyear" name="expyear" placeholder="Expiry Year" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" maxlength="3"placeholder="CVV" pattern="\d{3}" required>
              </div>
            </div>

            <button class="proceed">Proceed</button>
          </div>
    </div>


  </form>

</body>
</html>