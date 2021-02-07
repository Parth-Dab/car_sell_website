<!DOCTYPE html>
<html lanf="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"charset="UTF-8">
	<title>WELCOME</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    input{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
  color:#023;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:#023;
}
.lb{
  padding: 12px 12px 12px 0;
  margin-top:25px ;
  display: inline-block;
  color:#023;
}
input[type=submit]{
  background-color: #023;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-bottom: 2px;
}
input[type=submit]:hover{
  background-color: #4CAF50;
}
input[type=reset]{
  background-color: #023;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius:4px;
  cursor: pointer;
  float: right;
  margin-top: 0px;
  margin-bottom: 5px;
}
input[type=reset]:hover{
  background-color: #B22222;
}
.footer{
margin-left:90px;
margin-right:90px;
margin-top:20px;
}
.arr{
text-decoration: underline;
color:#023;
margin-top: 5px;
}
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
<?php

session_start();
include("cardb.php");

$err=$pass= '';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $log=$login='';
  $alog=$apass=$alogin='';

  $log=$_POST['uid'];
  $pass=$_POST['pid'];

  $alog=$_POST['uid'];
  $apass=$_POST['pid'];

  $qry = "select * from customer,admin";
  $rest = mysqli_query($con,$qry);

  while($row=mysqli_fetch_array($rest))
  {
     if($row['user_id'] == $log)
     {       
         if($row['password'] == $pass)
         {
              $login=$_POST['uid']; 
              $pass=$_POST['pid'];      

              $_SESSION["id"]=$login;
              $_SESSION["pass"]=$pass; 
             
                header('Location: /wb/website1/addcus.php');
             // header('Location: /wb/website1/index1.php?user_id='.$login);
              
         }
     
     }else if($row['admin_id'] == $alog)
      {       
         if($row['apassword'] == $apass)
         {
              $alogin=$_POST['uid'];
              $apass=$_POST['pid'];      

              $_SESSION["aid"]=$alogin;
              $_SESSION["ad"]=$row['a_id'];
              $_SESSION["apass"]=$apass; 
  
              header('Location: /wb/website1/dycart.php');
              //header('Location: /wb/website1/dycart.php?admin_id='.$alogin);
              
         }
     
      }  
      else{

          $err = 'Not Valid,Try Again';
          } 

  }
}

?>
<div class="header">
	<div  class="container">
		<div class="navbar">
		<div class="logo">
         <a href="index1.php">
         <img src="images/log.png" width="60px"></a>
		</div>	
		<nav>
			<ul id="menuitems" name="uul">
				<li id="li1"><a href="/wb/website1/index1.php">HOME</a></li>
				<li id="li2"><a href="aboutp.php">ABOUT</a></li>
				<li id="li3"><a href="#">ACCOUNT</a></li>
				<li id="li4"><a href="contact_us.php">CONTACT</a></li>
				<li id="li5"><a href="/wb/website1/cars.php">CARS</a></li>
			</ul>	
		</nav> 
		<a href="#" id="menuit"><img src="images/menu.png"  class="menu-icon"></a>    
	</div>
	</div>

  <div class="container">
   <div class="row">
   <form method="post" enctype="multipart/form-data">
   <center><h2 style="color:#023; font-family:verdana;">Login Here</h2>
   <p style="color:#023; font-family:verdana;">welcome to solomon motors</p>
   <label class="lb">USERID :</label><input type="text" name="uid" maxlength="100">
   <br>
   <label>PASSWORD :</label><input type="password" name="pid" maxlength="100"><br>
   <span style="color:red"><?php echo $err;?></span>
   <input class="btn" type="submit" name="sub" value="Login">
   <input class="btn" type="reset" name="rus" value="Reset">
   </center>

   </form>
   </div> 
  </div> 
<div>
<center><a style="display: inline-block; border-style: solid;border-radius:15px;  padding: 0px 5px 0px 5px; text-decoration: none;" class="arr" href="/wb/website1/createform.php">Create User <i class="fa fa-user-circle" aria-hidden="true"></i>
</a><br>
   <a style="display: inline-block; border-style: solid; border-radius:15px; padding: 0px 5px 0px 5px; text-decoration: none;"class="arr" href="/wb/website1/formAdmin.php">Create Admin
    <i class="fa fa-lock" aria-hidden="true"></i></a></center>
</div>
</div>	
<!--=======================================-->
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

