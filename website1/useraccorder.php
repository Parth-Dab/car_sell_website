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
.buy{
display: inline-block; 
border-style: none;
color: grey;
font-size: 40px;
background: none;
border-radius: 5px; 
padding: 4px 10px 4px 10px;
}      
.buy:hover{

display: inline-block; 
border-style: none;
border-radius: 5px;
font-size: 40px; 
padding: 4px 10px 4px 10px;
color: white;
transition-delay: 0.2s ease ;
}

.b{
color:black; 
background-color: transparent;
}
.b:hover{
color:white;
transition-delay: 0.2 ease; 
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.1s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
  margin-left: 40px;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}
#opbt{
  transition: margin-left .5s;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
	<script src="Script.js"></script>
</head>	
<body onload="openNav()">
<?php

session_start();
include("cardb.php");
?>
 <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
   <h1><?php  
        echo "<center><p style='color:blue;'>".$_SESSION["id"]."</h2></center>";    
      ?>
   </h1>
  <a href="cusinfo.php">USER INFO</a>
  <a href="#" active>YOUR ORDERS</a>
  <a href="addcus.php">DASHBOARD HOME</a>
   <center><button class="buy" onclick="goBack()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button></center> 
</div>
<div class="header">
  <div class="container">
    <div class="navbar">
     <nav style="margin-top: 10px;">
       <ul id="menuitems" name="uul">
         <li id="li1"><a href="/wb/website1/index1.php">HOME</a></li>
         <li id="li2"><a href="aboutp.php">ABOUT</a></li>
         <li id="li3"><a href="#" active><?php echo $_SESSION["id"];?></a></li>
         <li id="li4"><a href="contact_us.php">CONTACT</a></li>
         <li id="li5"><a href="/wb/website1/cars.php">CARS</a></li>
       </ul> 
     </nav>  
    <a href="#" style="margin-top: 10px;" id="menuit"><img src="images/menu.png"  class="menu-icon"></a>    
  </div>
  </div>
  <div class= "l1">
     <a  style=" float : right; margin-right: 2%; margin-top: 0%; border-style: double; 
             border-color: black; color : black; font-style: bold;" href="logout.php">Logout</a>
  </div>
  <button class="openbtn"  id="opbt" onclick="openNav()">☰</button>
  <div id="main">
    
  

<!---->
<div class="container">
  <div class="row1">
   <?php
       
     $qq="select bb_id,ccusid,ccusname,eemail,pphoneno,ccarid,ccarname,ccarprice,ssellername,ppaymentmeth from main_bill where ccusid in(select cus_id from customer   where user_id='".$_SESSION['id']."')";
    $res = mysqli_query($con,$qq); 
      if(!$res)
      {
        die("invalid query".mysqli_error($con));
      }

    while($r=mysqli_fetch_array($res))
    { 
    ?>
   
      <center>
     <div style=" display: inline-block; border:2px solid black; background-color:black;">
      <table class="noman" style="margin: 2px 2px 2px 2px;padding: 10px 10px 10px 10px; border:2px solid black; background-color:rgba(200,240,200,0.9);" border="2">
      <tr>
        <th colspan="2">ORDER INFORMATION</th>
      </tr>  
      <tr>  
       <td>BILL NO:</td> 
       <td><?php echo $r[0];?></td>
      </tr>
      <tr>
       <td>CUSTOMER ID:</td>
       <td><?php echo $r[1];?></td>
      </tr>
      <tr>
       <td>CUSTOMER NAME:</td>
       <td><?php echo $r[2];?></td>
      </tr>
      <tr>
       <td>CUSTOMER EMAIL:</td>
       <td><?php echo "$r[3]";?></td>
      </tr>
      <tr>
       <td>CUSTOMER PHONE:</td>
       <td><?php echo $r[4];?></td>
      </tr>
      <tr>
       <td>CAR ID:</td>
       <td><?php echo $r[5];?></td>
      </tr>
      <tr>
       <td>CAR NAME:</td>
       <td><?php echo $r[6];?></td>
      </tr>
      <tr>
       <td>CAR PRICE:</td>
       <td><?php echo $r[7];?></td>
      </tr>
      <tr>
       <td>SELLER NAME:</td>
       <td><?php echo $r[8];?></td>
      </tr>
       <tr>
       <td>PAYMENT METHOD:</td>
       <td><?php echo $r[9];?></td>
      </tr>
      <tr>
       <td colspan="2" align="center"><center><button class="buy" onclick="window.print()"><i  class="fa fa-print" aria-hidden="true"></i>
</button></center></td>
      </tr>
      </table>  
     </div>
     </center>
   
 <?php
    }
  mysqli_close($con);
 ?>
  
 
  </div>
</div>  
   <!---->
<!--=======================================-->
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
 function openNav()
 {
   document.getElementById("mySidebar").style.width = "250px";
   document.getElementById("main").style.marginLeft = "250px";
   document.getElementById("opbt").style.marginLeft = "1175px";
   document.getElementById("opbt").style.opacity = "0";
 }


function closeNav()
{
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("opbt").style.marginLeft = "100px";
 document.getElementById("opbt").style.opacity = "1";
}

function goBack() {
  window.history.back();
}

</script>

</body>	
</html>

