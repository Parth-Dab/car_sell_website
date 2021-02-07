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
				<li id="li1"><a href="index1.php">HOME</a></li>
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

  <div class="row">
    <div class="col-2"><center><h1>About Us :</h1></center>
    <div class="col-2" style="float:right; margin-right:2%;"><h2>Be The Buyer Of Your Dream Luxury Car Here </h2></div><br>
   <div class="col-2" style=" color:blue;float:center;margin-right:2%; margin-top:2%"><h4> 
    Our website gives people the option to pick up their favorite car, And also from a different dealer for the best price.here you can pick any car and by paying you can get your dream car from your nearest dealer. we do have collobration for that sort of work.which makes our system easier to grow and makes easy to deal with customer as well as dealers.our website portal is simply a mideater to makes work easy.
   </h4></div>
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

