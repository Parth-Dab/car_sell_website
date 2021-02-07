<?php

include("cardb.php");

$qry = "delete from car_details where car_id=".$_GET['carid']; 

$res = mysqli_query($con,$qry);

if($res == 1)
{
  header("Location: dycart.php");
}

?>
