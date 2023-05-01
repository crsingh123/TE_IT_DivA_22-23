<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styleindex.css">
<style>

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}


body {
  padding: 20px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: lightpink;
}

.header {
background-color: lightpink;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* Center website */
.main {
  max-width: 1200px;
  margin: auto;
}


.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 10px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}



/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}


input[type=text], select {
  width: 30%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}



</style>
</head>
<body>




<!-- MAIN (Center website) -->
<div class="main">
  <div class="header">
    <img src="designcake.png" style="width:100%;">
    </div>

      <h1 style="padding:2px;">Step 1 : Shape</h1>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="images/circle.jpeg" style="width:100%;height:170px">
      <h3>Circle</h3>
      </div>
  </div>

  <div class="column">
    <div class="content">
    <img src="images/squae.jpg" style="width:100%;height:170px">
      <h3>Square</h3>
    </div>
    
    
    </div>
    <div class="column">
      <div class="content">
      <img src="images/rectangle.jpg" style="width:100%;height:170px">
        <h3>Rectangle</h3>
      </div>
      
      
      </div>
      <div class="column">
        <div class="content">
        <img src="images/oval2.jpeg" style="width:100%; height:170px;">
          <h3>Oval</h3>
        </div>
        
        
        </div>
        <div class="column">
          <div class="content">
          <img src="images/star.jpg" style="width:100%;height:170px">
            <h3>Star</h3>
          </div>
          
          
          </div>
  <div class="column">
    <div class="content">
    <img src="images/heart.jpg"  style="width:100%;height:170px;">
      <h3>Heart</h3>
     </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/triangle3.jpeg" style="width:100%;height:170px;">
      <h3>Triangle</h3>
      </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/butterfly1.jpeg" style="width:100%;height:170px;">
      <h3>Butterfly</h3>
    </div>

 
  </div>
<!-- END GRID -->
</div>



<!-- END MAIN -->
</div>

<div class="main">
      <h1 style="padding:2px;">Step 2 : Base Flavor</h1>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="images/vanilla.jpeg" style="width:100%;height:170px;">
      <h3>Vanilla</h3>
      </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/oval3.jpeg"  style="width:100%;height:170px;">
      <h3>Chocolate</h3>
     </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/pineapple.jpeg" style="width:100%;height:170px;">
      <h3>Pineapple</h3>
      </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/coffee.jpeg" style="width:100%;height:170px;">
      <h3>Coffee</h3>
    </div>

 
  </div>

  <div class="column">
    <div class="content">
    <img src="images/mango.jpg" style="width:100%;height:170px;">
      <h3>Mango</h3>
    </div>

 
  </div>

  <div class="column">
    <div class="content">
    <img src="images/blueberry2.jpeg" style="width:100%;height:170px;">
      <h3>Blueberry</h3>
    </div>

 
  </div>

  <div class="column">
    <div class="content">
    <img src="images/rose.jpg" style="width:100%;height:170px;">
      <h3>Rose</h3>
    </div>

 
  </div>

  

  <div class="column">
    <div class="content">
    <img src="images/redvelvet.jpeg" style="width:100%;height:170px;">
      <h3>Red Velvet</h3>
    </div>

 
  </div>
<!-- END GRID -->
</div>



<!-- END MAIN -->
</div>



<div class="main">
  <h1 style="padding:2px;">Step 3 : Design</h1>

<!-- Portfolio Gallery Grid -->
<div class="row">
<div class="column">
<div class="content">
  <img src="images/mirror_glaze.jpg" style="width:100%;height:170px;">
  <h3>Mirror Glaze</h3>
  </div>
</div>
<div class="column">
<div class="content">
<img src="images/zebra.jpg"  style="width:100%;height:170px;">
  <h3>Zebra</h3>
 </div>
</div>
<div class="column">
<div class="content">
<img src="images/rainbow.jpg" style="width:100%;height:170px;">
  <h3>Rainbow</h3>
  </div>
</div>
<div class="column">
<div class="content">
<img src="images/swirl.jpg" style="width:100%;height:170px;">
  <h3>Swirl</h3>
</div>


</div>

<div class="column">
<div class="content">
<img src="images/drip.jpg" style="width:100%;height:170px;">
  <h3>Drip</h3>
</div>


</div>

<div class="column">
<div class="content">
<img src="images/thread_art.jpg" style="width:100%;height:170px;">
  <h3>Thread Art</h3>
</div>


</div>

<div class="column">
<div class="content">
<img src="images/rose_paint.jpg" style="width:100%;height:170px;">
  <h3>Paint Rose</h3>
</div>


</div>

<div class="column">
<div class="content">
<img src="images/gift_wrap.jpg" style="width:100%;height:170px;">
  <h3>Gift Wrap</h3>
</div>


</div>

<div class="column">
  <div class="content">
  <img src="images/basketweave.jpg" style="width:100%;height:170px;">
    <h3>Basketweave</h3>
  </div>
  
  
  </div>

  <div class="column">
    <div class="content">
    <img src="images/mettalic_gold.jpg" style="width:100%;height:170px;">
      <h3>Metallic gold</h3>
    </div>
    
    
    </div>
    <div class="column">
      <div class="content">
      <img src="images/tiger_print.jpg" style="width:100%;height:170px;">
        <h3>Tiger Print</h3>
      </div>
      
      
      </div>
      <div class="column">
        <div class="content">
        <img src="images/floral.jpg" style="width:100%;height:170px;">
          <h3>Floral</h3>
        </div>
        
        
        </div>
        <div class="column">
          <div class="content">
          <img src="images/ruffles.jpg" style="width:100%;height:170px;">
            <h3>Ruffles</h3>
          </div>
          
          
          </div>
          <div class="column">
            <div class="content">
            <img src="images/gravity.png" style="width:95%;height:170px;">
              <h3>Gravity</h3>
            </div>
            
            
            </div>
            <div class="column">
              <div class="content">
              <img src="images/neon.jpg" style="width:100%;height:170px;">
                <h3>Neon</h3>
              </div>
              
              
              </div>
              <div class="column">
                <div class="content">
                <img src="images/gel.jpg" style="width:100%;height:170px;">
                  <h3>Gel</h3>
                </div>
                
                
                </div>
                <div class="column">
                  <div class="content">
                  <img src="images/kitkat_gems_cake.png" style="width:100%;height:170px;">
                    <h3>Kitkat+Gems</h3>
                  </div>
                  
                  
                  </div>
                  <div class="column">
                    <div class="content">
                    <img src="images/oreo.jpg" style="width:100%;height:170px;">
                      <h3>Oreo</h3>
                    </div>
                    
                    
                    </div>
                    <div class="column">
                      <div class="content">
                      <img src="images/checkers.jpg" style="width:100%;height:170px;">
                        <h3>Checkers</h3>
                      </div>
                      
                      
                      </div>

                      <div class="column">
                        <div class="content">
                        <img src="images/bow.jpg" style="width:100%;height:170px;">
                          <h3>Bow</h3>
                        </div>
                        
                        
                        </div>
<!-- END GRID -->
</div>



<!-- END MAIN -->
</div>
<h3 style="padding:10px;color:red;">*Only applicable for Cash On Delivery.</h3>

<h3 style="padding:10px;color:red;">*Design your own cake option only avaliable fo 1 kg cake at Rs. 750.</h3>

<form action="design_action.php" method="POST">
<center> 
  <div class="select"> 
      <select name="slct1" id="slct"> 
 
          <option value="Circle">Circle</option> 
          <option value="Square">Square</option> 
          <option value="Rectangle">Rectangle</option> 
          <option value="Oval">Oval</option> 
          <option value="Star">Star</option> 
          <option value="Heart">Heart</option> 
          <option value="Triangle">Triangle</option> 
          <option value="Butterfly">Butterfly</option> 
      </select> 
  </div> 
<br>
  <div class="select"> 
    <select name="slct2" id="slct"> 

        <option value="Vanilla">Vanilla</option> 
        <option value="Chocolate">Chocolate</option> 
        <option value="Pineapple">Pineapple</option> 
        <option value="Coffee">Coffee</option> 
        <option value="Mango">Mango</option> 
        <option value="Blueberry">Blueberry</option> 
        <option value="Rose">Rose</option> 
        <option value="Red Velvet">Red Velvet</option> 
    </select> 
</div> 

<br>
  <div class="select"> 
    <select name="slct3" id="slct">  
        <option value="Mirror Glaze">Mirror Glaze</option> 
        <option value="Zebra">Zebra</option> 
        <option value="Rainbow">Rainbow</option> 
        <option value="Swirl">Swirl</option> 
        <option value="Drip">Drip</option> 
        <option value="Thread Art">Thread Art</option> 
        <option value="Paint Rose">Paint Rose</option> 
        <option value="Gift Wrap">Gift Wrap</option> 
        <option value="Basketweave">Basketweave</option> 
        <option value="Metallic Gold">Metallic Gold</option> 
        <option value="Tiger Print">Tiger Print</option> 
        <option value="Floral">Floral</option> 
        <option value="Ruffles">Ruffles</option> 
        <option value="Gravity">Gravity</option> 
        <option value="Neon">Neon</option> 
        <option value="Gel">Gel</option> 
        <option value="Kitkat+Gems">Kitkat+Gems</option> 
        <option value="Oreo">Oreo</option> 
        <option value="Checkers">Checkers</option> 
        <option value="Bow">Bow</option>  
    </select> 
</div> 
<a href="paymentcheckout.html"><button class="button button5">Submit Cake</button></a>
</center> 
</form>
<center>
<a href="indexnwer.php"><button class="button button5" style="background-color:aqua">Back To Home</button></a>
</center>
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
                    <img src="giftfooter.png">
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
