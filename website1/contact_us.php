<!DOCTYPE html>
<html lanf="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"charset="UTF-8">
  <title>WELCOME</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  input,textarea,select{
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
  color:#023;
  background-color: transparent;
  border-bottom-style: solid;
}

label{
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:#023;
  margin-right: 2px;
}

input[type=submit]{
  background-color: #023;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-bottom: 10px;
  margin-top: 10px;
}
input[type=submit]:hover{
  background-color: #4CAF50;
}
.footer{
margin-left:90px;
margin-right:90px;
}

.l1 a{
color : black;
}
.l1 a:hover{

  color : crimson;
}
.l1{
  border-radius: 2;
  border-color: black;
  display: inline-block;
  float :right;
  margin-right: 2%;
  padding : 2px 4px 2px 4px;
}
.l1:hover{
  border-radius: 2;
  border-style: solid;
  border-color: black;
  display: inline-block;
  float :right;
  margin-right: 2%;
  padding : 2px 4px 2px 4px;
  
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

<?php
include("cardb.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $carid = $_POST["nam"];
    $carname  = $_POST["eid"];
    $cardetail = $_POST["msg"];
    
 
  
$iq = "insert into contact_us(email,name,msg)values('$carname','$carid','$cardetail')";
$iqr = mysqli_query($con,$iq) or die(mysqli_error($con));

if($iqr == 1)
{
  header('Location: contact_us.php');

}
}
 mysqli_close($con);
?>
 <body>

  <div class="container">
    <div class="navbar">
    <div class="logo">
         <a href="index1.php">
         <img src="images/log.png" width="60px"></a>
    </div>  
    <nav>
      <ul id="menuitems" name="uul">
        <li id="li1"><a href="/wb/website1/index1.php">HOME</a></li>
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

<div class="container">
  <center><h1>CONTACT US:</h1></center>
<div class="row" style="display: inline-block; border: 4px solid black; padding: 5px 5px 5px 5px; ">
<h3 style="font-family:serif; font-style: all;"><p>We always appreciate honest feedback, constructive criticism and useful link suggestions. We never read copy-pasted PR or marketing material, so sending some over isn’t a good idea. Seriously.</p>
<p>
plz tell us our cons,so that we can improve afterwords please give us the honest feedback so that we can learn new things and improve oure website for customer and for ourself also. An honest fedback will be appreciated.</p>
</h3> 
</div> 
</div>
<div><center>
  <h1 style="color:#666777;">Feedback</h1></center>
</div>
<div class= "l1">
     <a  style=" float : right; margin-right: 2%; margin-top: 0%;" href="logout.php">
       <?php 
          if(isset($_SESSION['aid']) || isset($_SESSION['id']))
          {
            echo "Logout";
          }
       ?>
     </a>       
</div>  
<!--form started  -->
<div class="container">
  <div class="row">
   <form method="post" enctype="multipart/form-data" >
    
   <label>NAME :</label><input type="text" name="nam" maxlength="100"><br>
   <label>EMAIL ID:</label><input type="text" name="eid" maxlength="100" ><br>
   <label>MESSAGE:</label><textarea  name="msg"></textarea><br>
   <input type="submit" name="sem" value="ADD">
   
   </form>
  </div>
</div>
<center>
<hr style="border: 3px solid orange; width: 50%">
<hr style="border: 3px solid white; width: 50%">
<hr style="border: 3px solid green; width: 50%">
</center>
<!--form ended-->
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

</body> 
</html>

