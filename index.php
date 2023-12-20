<?php

echo"hi world";
echo "<br/>";
echo "its really cool";

// variables

$name =  "param";
$food = "paneer";
echo "<br/>";
echo "hello {$name} <br>";
echo "<br/>";
echo "good {$food} <br>";

$one = true ;
$two = false ;

$email = "paramkeswani@gmail.com";

$age = 20;
echo "<br>youre {$age} years old <br>";

echo "your email is {$email}";

$price = 20;

echo "<br> youre pizza is \${$price} only";

echo "<br>This is true {$one}";

echo "<br>this is false so nothing visible {$two}<br>";;

$total = $age * $price;

echo "your age is {$total}<br>";

//arthmetic thing 

$x = 10;
$y = 20;

$z = $x + $y ;
echo "{$z}<br>";

// increment thing 

$counter = 0;

$counter++;
echo "$counter<br>" ;
$counter +=2;
echo "$counter<br>" ;

// get and post variables in php
// s;pecial variables used to get data from an html form 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>

<button>order a pizza</button>

<form action="index.php" method="get">
    <label for="user">username:</label>
    <input type="text" name="username"> 
    <br>
    <label for="pass"> Password</label>
    <input type="password" name="password">
    <br>
    <button type="submit">Submit</button>
    <input type="text" name="" id="">


</form>


</form>

<form action="submit" method="post">
<label for="x">x</label>
<input type="text" name="x">

<label for="y">y</label>
<input type="text" name="y">
<input type="submit" name="submit" id="" value="submit">
</form>
    
</body>
</html>

<?php


//using get : No security as the pass and username are visible in the link 

// echo"{$_GET["username"]}<br>";
// echo "{$_GET["password"]}<br>";

$x = $_POST["x"];
$y = $_POST["y"];

$total = pow($x,$y);
echo "{$total}<br>";

$total = abs($x);
echo "{$total}<br>";
$total = round($x);
echo "{$total}<br>";
$total = floor($x);
echo "{$total}<br>";
$total = ceil($x);
echo "{$total}<br>";



//using post
//if security is important then use post if security not important then post 
//variable  value can be changed in get 
// echo "{$_POST["username"]}<br>";
// echo "{$_POST["password"]}<br>";






?>