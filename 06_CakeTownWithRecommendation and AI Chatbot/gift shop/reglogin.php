<html>
<head>
<title>Login and registration Page</title>
<link rel="stylesheet" href="stylelogin.css">
</head>
<body>
<div class="hero">
<div class="form-box">
<div class="button-box">
<div id="btn">
</div>
<button type="button" class="toggle-btn" onclick="login()">Log In</button>
<button type="button" class="toggle-btn" onclick="register()">Register</button>
</div>
<!--<div class="social-icons">
<img src="fb.png>
<img src="fb.png>
<img src="fb.png>
</div>-->
<form name="form" id="login" class="input-group" action="login_action.php" method="POST"> 
    <input type="text" name="username" class="input-field" placeholder="User Name" required>
    <input type="password" name="password" class="input-field" placeholder="Enter Password" required>

    <button type="submit" class="submit-btn">Log in</button>
</form>

<form name="form" id="register" class="input-group" action="reg_action.php" method="POST">
  <input type="text" name="username" class="input-field" placeholder="User Name" required pattern="[a-z]{1,15}" title="Username should only contain lowercase letters. e.g. isha">
  <input type="email" name="email" class="input-field" placeholder="Email Id" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
  <input type="text" name="address" class="input-field" placeholder="Address" required>
  <input type="tel" name="phone" class="input-field" name="phone" placeholder="Phone Number" required pattern="^\d{10}$">
  <input type="password" name="password" class="input-field" id="password"  placeholder="Enter Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
  <input type="password" name="confirmp" class="input-field" placeholder="Confirm Password" id="confirm_password" required>

  <input type="checkbox" class="check-box" required><span>I agree to the terms and conditions</span>
  <button type="submit" class="submit-btn">Register</button>
</form>


</div>
</div>
<script>
var x=document.getElementById("login");
var y=document.getElementById("register");
var z=document.getElementById("btn");

function register(){
x.style.left="-400px";
y.style.left="50px";
z.style.left="110px";
}

function login(){
x.style.left="50px";
y.style.left="450px";
z.style.left="0px";
}

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match we the above password");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
 

</script>
</body>
</html>