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
  border-style: solid;
  border-color: black;
  display: inline-block;
  float :right;
  margin-right: 2%;
  padding : 2px 4px 2px 4px;
}
.l1:hover{
  border-radius: 2;
  border-style: groove;
  border-color: crimson;
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
session_start();
include("cardb.php");

$query = "select * from car_details where car_id=".$_GET["carid"];
$result = mysqli_query($con,$query);

if($_SERVER["REQUEST_METHOD"] == "POST")
{

       $carid = $_POST["carid"];
    $carname  = $_POST["carname"];
   $cardetail = $_POST["cardetail"];
   $carprice  = $_POST["carprice"];
    $aal =(int)$_SESSION["ad"];

   $filetmp_path = $_FILES["carphoto"]["tmp_name"];
   $dest_path = "dycar/".$_FILES["carphoto"]["name"];
     
  if(move_uploaded_file($filetmp_path,$dest_path))
  {
    echo "file uploaded successfully";
  }
  else
  {
    echo "upload failed";
  } 
 
  
$iq = "update car_details set car_name='$carname',car_ph='$dest_path',car_detail='$cardetail',car_price='$carprice' where car_id=".$_GET["carid"];

$iqr = mysqli_query($con,$iq) or die(mysqli_error($con));

header('Location: dycart.php');
}
$row = mysqli_fetch_array($result);

?>
 <?php if(isset($_SESSION["aid"]))
    {
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
        <li id="li3"><a href="#"><?php echo $_SESSION['aid'];?></a></li>
        <li id="li4"><a href="contact_us.php">CONTACT</a></li>
        <li id="li5"><a href="/wb/website1/cars.php">CARS</a></li>
      </ul> 
    </nav>  
    <a href="#" id="menuit"><img src="images/menu.png"  class="menu-icon"></a>    
  </div>
 </div>  
<div><center><h1>Welcome Admin <?php echo $_SESSION["aid"];?>
</h1></center>
</div>
<div class= "l1">
     <a  style=" float : right; margin-right: 2%; margin-top: 0%;" href="logout.php">Logout</a>       
</div>  
<!--form started  -->
<div class="container">
  <div class="row">
   <form method="post" enctype="multipart/form-data" >
    <div style="margin-top:20px; padding:5px 5px 5px 5px; margin-bottom: 5px; "><center><h1 style="color: currentColor;text-decoration: all; border-style: solid; border-color: black;">UPDATE CARS</h1></center></div>
   <label>CAR ID:</label><input type="text" name="carid" maxlength="100" value="<?php echo $row[0]?>" disabled><br>
   <label>CAR NAME:</label><input type="text" name="carname" maxlength="100" value="<?php echo $row[1]?>"><br>
   <label>CAR PHOTO:</label><input type="file" name="carphoto" value="<?php echo $row[2]?>"><br>
   <label>CAR DETAIL:</label><textarea  name="cardetail"><?php echo $row[3]?></textarea>
   <br>
   <label>CAR PRICE:</label><input type="text" name="carprice" value="<?php echo $row[4]?>"></textarea> 
   <input type="submit" name="save" value="ADD">
   
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
 <?php 
    }
    else
     {
      echo "session time out";
      header('Location: index1.php');
     } 
?>
