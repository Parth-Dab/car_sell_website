<!DOCTYPE html>
<html lanf="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"charset="UTF-8">
	<title>WELCOME</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
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

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:#023;
  margin-right: 2px;
}

input[type=radio]
{
padding: 5px 5px;
margin: none;
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
input[type=reset]{
  background-color: #023;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-top: 2px;
}
input[type=reset]:hover{
  background-color: #B22222;
}
.footer{
margin-left:90px;
margin-right:90px;
}

.genn input{
width:10%;
display: inline-block;
color: #023;
border:none;
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
<div class="header">
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
<!--=============================================================================-->
<?php
    include("cardb.php");
    $msg="";
  if(isset($_POST['save']))
  { 
   $cname=$_POST['uname'];
   $clname=$_POST['ulname'];
   $cadd=$_POST['uaddress'];
   $city=$_POST['citcombo'];
   $gen=$_POST['gender'];
   $email=$_POST['uemail'];
   $phon=$_POST['unumb'];
   $uid=$_POST['uid'];
   $password = $_POST['pword'];
   $confirmpassword = $_POST['cpword'];
  
   if($password != $confirmpassword)
   {
     $msg="Error... Passwords do not match";
   }
   else
   {
    $insq="insert into customer(cus_id,cus_name,cus_lname,cus_address,city_id,gender,email,phone_no,user_id,password,con_password)values(NULL,'$cname','$clname','$cadd',$city,'$gen','$email','$phon','$uid','$password','$confirmpassword')";
   
    $inres = mysqli_query($con,$insq) or die(mysqli_error($con));
   
    if($inres == 1)
    {
     header('Location: /wb/website1/wlogin.php');
     mysqli_close($con);
    }
   } 
  }
?>
<!--=============================================================================-->
   <form method="post" enctype="multipart/form-data" >
   <label style="font-size: 50px; margin-top: 5px; ">ACCOUNT CREATION... As User</label><br>
   <label>NAME:</label><input type="text" name="uname" maxlength="100" required><br>
   <label>LAST NAME:</label><input type="text" name="ulname" maxlength="100"required><br>
   <label>ADDRESS:</label><textarea  name="uaddress" required></textarea><br>
  <label>CITY:</label>
   <select name="citcombo" required>
      <?php
       $qry = "select * from cus_city";
       $rest = mysqli_query($con,$qry);
       while($row=mysqli_fetch_array($rest))
       {
      ?>
       <option value="<?php echo $row[0]?>"><?php echo $row[1];?></option>
      <?php
       }
      ?>
   </select><br>
   <div class="genn" >
   <label style="margin-top:10px;">GENDER:</label>
   MALE<input type="radio" name="gender" value="male" required>
   FEMALE<input type="radio" name="gender" value="female" required><br>
   </div>
   <label>EMAIL:</label><input type="email" name="uemail" required><br>
   <label>PHONE NO.:</label><input type="tel" name="unumb" pattern="[0-9]{10}"  required><br>
   <label>USER ID:</label><input type="text" name="uid" required><br>
   <label>PASSWORD:</label><input type="password" name="pword" required><br>
   <label>CONFIRM PASSWORD:</label><input type="password" name="cpword" required>
    <span style="color: red;"><?php if(isset($_POST['save']))
    { 
       echo $msg; 
    }?>
     </span>
   <br>
   <input type="submit" name="save" value="CREATE">
   </form>
   </div> 
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

