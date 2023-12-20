<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index3.php" method="get">
<label for="" name="grade">Enter grade</label>
<input type="text" name="grade">

<input type="submit" value="submit">


</form>
    
</body>
</html>

<?php
  $grade = $_GET["grade"];

  switch($grade)
  {
    case "A" :
        echo "you are doing great(A)";
        break ;
    case "B" :
        echo "you are doing good(B)";
        break ;
    case "C" :
        echo "you are doing okay(C)";
        break ;
    case "D" :
        echo "you have to improve(B)";
        break ;
    default:
        echo "{$grade} is not a grade ";


  }


$date = date("l");
  echo "<br>{$date}";
  echo"<br>using for loops";
  for($i=0;$i < 10;$i++)
  {
    echo "happy birthday Bheem <br>";
    echo $i."<br>";
  }

  echo "defining arrays in php";
  $foods = array("apple","orange","bannana");
  echo $foods[0]."<br>";
  echo $foods[1]."<br>";
  echo $foods[2]."<br>";


  echo "now using foreach method of retriving the food <br><br>";
  foreach($foods as $food)
  {
    echo $food."<br>";
  }

  echo "for inserting the elements in the array :";

  array_push($foods,"one","two");
  foreach($foods as $food)
  {
    echo $food."<br>";
  }
  echo "<br>similarly for popping<br>" ;
  array_pop($foods);
  echo "<br>pop remove the last entered element in the array<br>";

  foreach($foods as $food)
  {
    echo $food."<br>";
  }

  echo "for removing the first element :<br>";
  array_shift($foods);

  foreach($foods as $food)
  {
    echo $food."<br>";
  }

  echo " this is used for reversing the array but for this it has to be stored in some another array :<br><br>";
$reversed_array = array_reverse($foods);

echo "Here is the reversed array :<br> <br>";

foreach($reversed_array as $food)
  {
    echo $food."<br>";
  }


  echo "counting the number of elements in an array :<br>";
  echo count($foods);

?>