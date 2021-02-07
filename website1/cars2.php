<!DOCTYPE html>
<html lanf="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"charset="UTF-8">
  <title>WELCOME</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="Script.js"></script>
  <style type="text/css">
    nav ul li{
     padding: 5px; 
      margin: 0px;
    }
    nav a{
        display: inline-block;
        padding: 1px 10px 1px 10px;
        width:100%;
        height:100%;
        margin-right : 0px;
       }
     nav a:hover{
      display: inline-block;
      background-color: rgba(240,240,240,0.9);
      border-style: double;
      border-size : 0px;
      border-color: rgba(60,60,60,0.7);
      padding: 1px 10px 1px 10px;
      color: black;
      width:100%;
      height:100%;
      margin-right : 0px;
      transition: 0.2s;
      }  

  </style>
</head> 
<body>
<?php session_start();?>
  <div class="container">
    <div class="navbar">
    <div class="logo">
         <a href="index1.php">
         <img src="images/log.png" width="60px"></a>
    </div>  
    <nav>
      <ul id="menuitems" name="uul">
        <li id="li1"><a href="/wb/website1/index1.php">HOME</a></li>
        <li id="li2"><a href="#">ABOUT</a></li>
        <li id="li3"><a href="afterlogout.php"><?php 
                                 if(isset($_SESSION['aid']))
                                 { 
                                   echo $_SESSION['aid'];
                                 }
                                 else if(isset($_SESSION['id']))
                                 {
                                  echo $_SESSION['id'];
                                 }
                                 else
                                 {
                                   echo "ACCOUNT";
                                 }
                                 ?></a></li>
        <li id="li4"><a href="contact_us.php">CONTACT</a></li>
        <li id="li5"><a href="/wb/website1/cars.php">CARS</a></li>
      </ul> 
    </nav> 
    <a href="#" id="menuit"><img src="images/menu.png"  class="menu-icon"></a>    
  </div>
  </div>
  

<div class="sm-container">
  <div class="row-2">
    <center><h2 style="color:#333;" class="title">ALL CARS</h2></center>

</div>    
  <div class="row">
    <div class="col-9">
      <?php
             $if = glob('cars2_2/{*.jpg,*.png}',GLOB_BRACE);
             foreach($if as $key=> $value)
             {
             ?>
                <div> 
                <img src="<?php echo $value;?>" alt="<?php echo $value;?>">
                <h5><?php echo basename($value,".jpg");?></h5>
                     <i class="fa fa-star" style="color: #FFA500;"></i> 
                     <i class="fa fa-star" style="color: #FFA500;"></i> 
                     <i class="fa fa-star" style="color: #FFA500;"></i> 
                     <i class="fa fa-star" style="color: #FFA500;"></i> 
                     <i class="fa fa-star-o" style="color: #FFA500;"></i>
                      
                </div>

            <?php
             }
           ?>  
    </div>   
  </div> 
</div>  

<div class="sm-container">
<div class="row">
 <div class="col-4"> 
  <div id="page-btn">
    <a href="/wb/website1/cars.php"><button class="ac">1</button></a>
     <a href="/wb/website1/cars2.php"><button class="ac active">2</button></a>
     <a href="#"><button class="ac">3</button></a>
     <a href="#"><button class="ac">4</button></a>
  </div>
 </div>   
</div>
</div>

<div class="footer1">
  <div class="sm-container">
    <div class="row">
     <div class="footer-col-1">
        <h3>Download Our App</h3>
        <p>Download App for Android and
          ios mobile phone.
        </p>
          <div class="app-logo">
            <img src="images/play-store.png" alt="">
            <img src="images/app-store.png" alt="">
          </div>
     </div>
     <div class="footer-col-2">
        <img src="images/log.png" alt="solo-mon">
        <p>Our Purpose is to make family happy with the vehicle.  
        </p>
     </div>
     <div class="footer-col-3">
        <h3>Useful links</h3>
        <ul>
          <li>Privacy Policies</li>
          <li>Blog Post</li>
          <li>Corporate Policies</li>
          <li>Terms & Conditions</li>
          <li>FAQs</li>
        </ul> 
     </div>
     <div class="footer-col-4">
        <h1>Follow Us on:</h1>
        <h1>
        <ul>
          <li class="fa fa-facebook"></li>
          <li class="fa fa-instagram"></li>
          <li class="fa fa-twitter"></li>
          <li class="fa fa-youtube"></li> 
        </ul>
        </h1> 
     </div>
    <hr>  

    <div class="div1">
    <p class="copyright"><i class = "fa fa-copyright"></i>2020 solo-mon.</p>
    </div>
  </div>  
</div>
</div>  
<script>
    $("#slideshow > div:gt(0)").hide(50);
         setInterval(function(){ 
         $('#slideshow > div:first')
          .fadeOut(1000)
           .next()
           .fadeIn(1000)
           .end()
           .appendTo('#slideshow');
            },2500)

   $(document).ready(function(){
         $( "#menuit" ).click(function(){
        $( "#li1" ).toggle(500,function(){
             $( "#li2" ).toggle(500,function(){
               
               $( "#li3" ).toggle(500,function(){
                  
                  $( "#li4" ).toggle(500,function(){
                      $( "#li5" ).toggle(500);

                  });

               });

             });

        });
        
        });
    
    });
</script>
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("page-btn");
var btns = header.getElementsByClassName("ac");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}</script>
</body> 
</html>

