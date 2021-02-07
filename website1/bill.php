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

.buy{
display: inline-block; 
border-style: double;
border-radius: 40px; 
padding: 4px 10px 4px 10px;
}      
.buy:hover{

display: inline-block; 
border-style: double;
border-radius: 40px; 
padding: 4px 10px 4px 10px;
color: #000;
background-color: #136695;
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
.l1 a{
color : black;
}
.l1 a:hover{

  color : crimson;
}
.l1{
  border-style: double;
  border-color: black;
  display: inline-block;
  float :right;
  margin-right: 2%;
  padding : 2px 4px 2px 4px;
}
.l1:hover{
  border-style: double;
  border-color: crimson;
  display: inline-block;
  float :right;
  margin-right: 2%;
  padding : 2px 4px 2px 4px;
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
  cursor: pointer;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}
#opbt{
  transition: margin-left .5s;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
  </style>
</head> 
<body onload="openNav()">
<?php session_start(); ?>
  <div class="container">
    <div class="navbar">
    <nav>
      <ul id="menuitems" name="uul">
        <li id="li1"><a href="/wb/website1/index1.php">HOME</a></li>
        <li id="li2"><a href="aboutp.php">ABOUT</a></li>
        <li id="li3"><a href="#"><?php echo $_SESSION["id"];?></a></li>
        <li id="li4"><a href="contact_us.php">CONTACT</a></li>
        <li id="li5"><a href="/wb/website1/cars.php">CARS</a></li>
      </ul> 
    </nav> 
    <a href="#" id="menuit"><img src="images/menu.png"  class="menu-icon"></a>    
    
  </div>
 </div>
 <div class= "l1">
     <a  style=" float : right; margin-right: 2%; margin-top: 0%;" href="logout.php">Logout</a>       
 </div> 
  <button class="openbtn"  id="opbt" onclick="openNav()">☰</button>
 <div id="main">
  <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
   <h1>
<?php  
        echo "<center><p style='color:blue;'>".$_SESSION["id"]."</p></center>";       
?>
   </h1>
  <a href="cusinfo.php">USER INFO</a>
  <a href="useraccorder.php">YOUR ORDERS</a>
  <a href="addcus.php">DASHBOARD HOME</a>
   <center><button class="buy" onclick="goBack()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button></center> 
</div>

 <div><center><h1>BILL</h1><center></div>
<?php
     include("cardb.php");
     $qq="select b_id,cusid,cusname,email,phoneno,carid,carname,carphoto,sallername,paymentmeth from bill";
    $res = mysqli_query($con,$qq); 
      if(!$res)
      {
        die("invalid query".mysqli_error());
      }

      if(mysqli_num_rows($res)==0)
      {
         echo "ERROR 404!!!!!!!";
      }

    while($re=mysqli_fetch_array($res))
    { 
?>
<div class="sm-container single-car">
 <div class="row">  
    <div style="display:inline-block; border-style: double;">
      <p align="left">
       BILL NO         : <?php echo $re[0];?><br>  
       CUSTOMER ID     : <?php echo $re[1];?><br>
       CUSTOMER NAME   : <?php echo $re[2];?><br>
       CUSTOMER EMAIL  : <?php echo $re[3];?><br>
       CUSTOMER PHONE  : <?php echo $re[4];?><br>
       CAR ID          : <?php echo $re[5];?><br>
       CAR NAME        : <?php echo $re[6];?><br>
       CAR PRICE       : <?php echo $re[7];?><br>
       SELLER NAME     : <?php echo $re[8];?><br>
       PAYMENT METHOD  : <?php echo $re[9];?><br>
      </p>
     </div> 
   
 </div>
</div> 
<?php
   }
    
     $qh="insert into main_bill(bb_id,ccusid,ccusname,eemail,pphoneno,ccarid,ccarname,ccarprice,ssellername,ppaymentmeth)select b_id,cusid,cusname,email,phoneno,carid,carname,carphoto,sallername,paymentmeth from bill";
    $res = mysqli_query($con,$qh); 
      if(!$res)
      {
        die("invalid query".mysqli_error($con));
      }

     $qa="delete from bill";
    $res = mysqli_query($con,$qa); 
      if(!$res)
      {
        die("invalid query".mysqli_error($con));
      }


   mysqli_close($con);
?>


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

