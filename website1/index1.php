<!DOCTYPE html>
<html lanf="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"charset="UTF-8">
	<title>WELCOME</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    
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
	<script src="Script.js"></script>
</head>	
<body>
 <?php session_start();?> 
<div class="header">
	<div class="container">
		<div class="navbar">
		<div class="logo">
         <a href="index1.php">
         <img src="images/log.png" width="60px"></a>
		</div>	
		<nav>
			<ul id="menuitems" name="uul">
				<li id="li1"><a >HOME</a></li>
				<li id="li2"><a href="aboutp.php">ABOUT</a></li>
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
                                   echo "LOGIN";
                                 }
                                 ?></a></li>
				<li id="li4"><a href="contact_us.php">CONTACT</a></li>
				<li id="li5"><a href="/wb/website1/cars.php">CARS</a></li>
			</ul>	
		</nav> 
		<a href="#" id="menuit"><img src="images/menu.png"  class="menu-icon"></a>    
	</div>
	<div class="row">
    <div class="col-2"><h1>Sports With Luxuary<br>A New Era!</h1>
       <p>The vehicle is not just a ordinary vehicle, it's simply a part of the family, as<br> an important member that never be forgotten.</p>
       <a href="cars.php" class="btn">Explore Now &#8594;</a>
    </div>
    <div class="col-2">
    	
    <div id="slideshow">
   <div>
     <img src="trans/lambo1.png"  width="600px">
   </div>
   <div>
     <img src="trans/lam2.png" width="600px">
   </div>
   <div>
     <img src="trans/lambo.png"  width="600px">
   </div>
   </div>
    </div>
	</div>	
	</div>

</div>	
<div class="categories">
  <div class="sm-container">	
	<div class="row">
	  <div class="col-3">
       <img src="images/lam.jpg" alt=""/>
      </div>
      <div class="col-3">
       <img src="images/aud.jpg" alt=""/>
      </div>
      <div class="col-3">
       <img src="images/fer.jpg" alt=""/>
      </div>
	</div>
  </div>
</div>

<div class="sm-container">
	<h2 class="title" id="t1">Featured Car</h2>
	<div class="row">
		<div class="col-4">
			
			<img style="border-radius: 5%;" src="images/s.jpg">
			<h4>SONY VISION S</h4>
			<div class="rating">
			<i class="fa fa-star" ></i>	
			<i class="fa fa-star" ></i>	
			<i class="fa fa-star" ></i>	
			<i class="fa fa-star" ></i>	
			<i class="fa fa-star-o" ></i>	
			</div>	
			<P class="p1">$2M</P>
		</div>
		 <div class="col-4">
			<img src="images/i8.jpg" style="border-radius: 5%;">
			<h4>BMW I8</h4>
			<div class="rating">
			<i class="fa fa-star" ></i>	
			<i class="fa fa-star" ></i>	
			<i class="fa fa-star" ></i>	
			<i class="fa fa-star-half-o" ></i>	
			<i class="fa fa-star-o" ></i>	
			</div>	
			<P class="p2">$1M</P>
		</div>	
		<div class="col-4">
			<img src="images/teslam3.jpg" style="border-radius: 5%;">
			<h4>TESLA MODEL 3</h4>
			<div class="rating">
			<i class="fa fa-star" ></i>	
			<i class="fa fa-star" ></i>	
			<i class="fa fa-star" ></i>	
			<i class="fa fa-star-o" ></i>	
			<i class="fa fa-star-o" ></i>	
			</div>	
			<P class="p3">$340K</P>
		</div>		
	</div>	
<h2 class="title">UPCOMING NEW CARS</h2>
    <div class="row">
		<div class="col-5">
			
			<?php
			
             $im = glob('newcars/{*.jpg,*.png}',GLOB_BRACE);

             foreach($im as $key=> $value)
             {
             ?>
                <div>	
                <img src="<?php echo $value;?>" alt="<?php echo $value;?>">
                <h5><?php echo basename($value,".jpg");?></h5>
                </div>
              
            <?php
             }
           ?>

	</div>	
</div>	

<div class="offer">
  <div class="sm-container">
    <div class="row">
    	<div class="col-2">
    		<img src="images/f1.png" class="offer-img">
    	</div>
    	
    	<div class="col-2">
    		 <p>BEST OF THE BEST OFFER FOR YOU</p>
    		 <h1>FERRARI F1 RACER</h1>
    		 <small>
    		 	The Ferrari SF70H is a Formula One racing car designed and constructed by Scuderia Ferrari to compete during the 2017 Formula One season.The car was driven by Sebastian Vettel and Kimi Räikkönen.
    		 </small><br>
    		 <a disable class="btn">Coming Soon</a>
    	</div>
    </div>	
  </div>
</div>	

<div class="testimonial">
 <div class="sm-container">
   <div class="row">
     <div class="col-3">
     	<i class="fa fa-quote-left"></i>
     	<p>solo-mon is the biggest online supercar seller in the india with the market cap of $100M.its beign growing since the begining.It brought a new experience.</p>
     	<div class="rating">
     		<i class="fa fa-star"></i>
     		<i class="fa fa-star"></i>
     		<i class="fa fa-star"></i>
     		<i class="fa fa-star"></i>
     		<i class="fa fa-star-o"></i>
     	</div>	
     	<img src="person/parth.jpg">
     	<h3 align="center">Parth Dabheliya</h3>
      </div>

       <div class="col-3">
     	<i class="fa fa-quote-left"></i>
     	<p>solo-mon is the biggest online supercar website i have ever seen, and experience was way better than the any other website, i am very happy.too good</p>
     	<div class="rating">
     		<i class="fa fa-star"></i>
     		<i class="fa fa-star"></i>
     		<i class="fa fa-star"></i>
     		<i class="fa fa-star"></i>
     		<i class="fa fa-star-o"></i>
     	</div>	
     	<img src="person/zeel.png">
     	<h3 align="center">Zeel Sheladiya</h3>
      </div>

       <div class="col-3">
     	<i class="fa fa-quote-left"></i>
     	<p>solo-mon is the biggest online supercar seller in the india with the market cap of $100M.its beign growing since the begining.It brought a new experience.</p>
     	<div class="rating">
     		<i class="fa fa-star"></i>
     		<i class="fa fa-star"></i>
     		<i class="fa fa-star"></i>
     		<i class="fa fa-star"></i>
     		<i class="fa fa-star-half-o"></i>
     	</div>	
     	<img src="person/vishal.png">
     	<h3 align="center">Vishal Yennam</h3>
      </div>
   </div>
 </div>	
</div>

<div class="brands">
	<div class="sm-container">
		<div class="row">
			<div class="col-6">

			 <?php
			
             $in = glob('car-brands/{*.jpg,*.png}',GLOB_BRACE);

             foreach($in as $key=> $value)
             {
             ?>
                <div>	
                <img src="<?php echo $value;?>" alt="<?php echo $value;?>">
                </div>
              
            <?php
             }
            ?>
			</div>

		</div>	
	</div>	
</div>	
<div class="footer">
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
	  </div>
	  <hr>	

	  <div class="div1">
    <p class="copyright"><i class = "fa fa-copyright"></i>2020 solo-mon.</p>
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

</body>	
</html>

