<!DOCTYPE html>
<html>
<head>
	<title>image galary</title>
<style type="text/css">
	
*
{
margin : 0;
padding: 0;
background-color:  #a65b59;
}
.hj{
display: flex;
justify-content: center;
}
.hj img{

height:20%;
width:20%;
border-radius: 50%;
}


</style>
</head>	
<body>
<center><h1>IMAGE GALARY</h1></center>

<?php

$dir = glob('images/{*.jpg,*.png}',GLOB_BRACE);

foreach($dir as $key => $value)
{
?>
<div class="hj">
<img src="<?php echo $value?>" alt="<?php echo $value?>">
</div>
<?php
}
?>
</body>
</html>