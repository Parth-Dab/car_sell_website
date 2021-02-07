<?php
$con = mysqli_connect("localhost:3306","root","");
$db = mysqli_select_db($con,"car_sell_website");
if(!$con)
{
	die("connection failed".mysqli_error());
}
if(!$db)
{
	die("db is not connected".mysqli_error());
}	
?>