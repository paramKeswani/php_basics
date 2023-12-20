//using key value pairs
<?php
echo "<br>";
$capital = array("Usa"=>"Washington Dc",
"Japan"=>"Tokyo",
"South Korea" =>"Seoul",
"India" =>"Delhi");

echo $capital["Usa"]."<br>";


foreach($capital as $country =>$cap)
{
    echo"{$country} => {$cap}<br>";
}

echo "for updating the thing <br>";

$capital["India"] = "Mumbai";


foreach($capital as $country =>$cap)
{
    echo"{$country} => {$cap}<br>";
}

echo "adding a new country";

$capital["China"] = "Beijing";

foreach($capital as $country =>$cap)
{
    echo"{$country} => {$cap}<br>";
}

array_pop($capital);

echo "removing an element using pop<br>";
foreach($capital as $country =>$cap)
{
    echo"{$country} => {$cap}<br>";
}

echo "If you need all keys then make a new array and tahen make a use the below function ";

$keys  = array_keys($capital);
echo "<br><br>";
foreach($keys as $key)
{
    echo"{$key}<br>";
}

echo "same is for values";
$values = array_values($capital);
echo "<br><br>";
foreach($values as $value)
{
    echo"{$value}<br>";
}


echo "now flipping keys and value pairs for this you have to make a new arrays or reinitial lize it";
$capital = array_flip($capital);
echo "<br><br>";
foreach($capital as $key =>$value)
{
    echo"{$key} => {$value} <br>";
}



echo "now reversing the order i.e 4 th will become first  for this you have to make a new arrays or reinitial lize it";
$capital = array_reverse($capital);
echo "<br><br>";
foreach($capital as $key =>$value)
{
    echo"{$key} => {$value} <br>";
}



echo "<br><br>";

echo "for counting the number of elements in the array<br><br>";

echo count($capital);



?>