<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index2.php" method="post">


<label for=""> radius</label>
<input type="text" name="radius">

<input type="submit" name="" id="" value="submit">




</form>
    
</body>
</html>

<?php

$r = $_POST["radius"];
$circum = 2*pi()*$r;
$area = pi()*pow($r,2);

$circum = round($circum,2);

echo " Circumference is : {$circum} <br>";

echo " Area is : {$area} ";

?>