<html>
<head>
<title>Contact Form</title>

<link rel="stylesheet" href="styleindex.css">
<style>



body {
    background:url("cfbg1.jpeg");
    background-repeat: no-repeat;
    background-position:center;
    background-size:cover;
    }
    
    h1 {
    text-align:center;
    font-size:50px;
    color:rgb(255, 255, 255);
    }
        
    h2 {
    text-align:center;
    padding-bottom: 20px;
    font-size:30px;
    color:rgb(255, 255, 255);
    }

    form {
    margin :20px auto;
    width:320px;
    color:steelblue;
    }
    
    input {
    padding:10px;
    font-size:inherit;
    }
    
    input[type="text"] , textarea{
    display : block;
    margin-bottom:25px;
    width:100%;
    border:2px solid steelblue;
    background:rgb(255, 255, 255);
    }
    
    input[type="email"] {
    display : block;
    margin-bottom:25px;
    width:100%;
    border:2px solid steelblue;
    background:rgb(255, 255, 255);
    }
    
   
    
    input[type="submit"] {
    height:45px;
    width:100%;
    border:none;
    color : black;
    background-color: rgb(120, 186, 240);
    }
    
    input[type="submit"]:focus {
    height:45px;
    width:100%;
    border:solid steelblue;
    color : rgb(0, 0, 0);
    background:rgb(252, 214, 45);
    }
    
    
    input:focus {
    background:white;
    }
    

    
    
    </style>
</head>
<body>
<h1>Contact Form</h1>
<h2>JUST ASK , GET SOLVED!!! </h2>
<form action="contact_action.php" method="POST">
<input type = "email" name="email" placeholder = "Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
<input type = "text" name="phone" placeholder = "Phone Number(ex:any 10 digit number)" required pattern="^\d{10}$">
<input type = "text" name="subject" placeholder = "Subject" required>
<!-- <input type = "text" placeholder = "Message" rows="10" cols="30" required style="height:20%;margin-top:20px;padding-bottom:80px;"> -->
<textarea id="Message" name="message" placeholder="Message" required style="height:100px"></textarea>
<input type ="submit" value ="Submit">
</form>

<div class="footer">
        <div class="container2">
            <div class="row">
                <div class="footer-col-1" style="margin-left:30px;padding:50px">
                    <h3>Download our APP</h3>
                    <p>Download app for mobile and tablet</p>
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