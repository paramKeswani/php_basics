<?php

setcookie("fav_food","pizza",time()+(86400 * 2),"/");
//above thing will be storedfor 2 days so time() +(86400*2)
//if you want to delete the cookie then just do time()-0;

//so syntax will be like 
// setcookie("fav_food","pizza",time()-0,"/");
//all these cookies will be visble in application p[art of the inspect thing
//

setcookie("fav_drink","coffee",time()+(86400 * 2),"/");
setcookie("fav_day","sunday",time()+(86400 * 2),"/");

foreach($_COOKIE as $key => $value)
{
    echo "{$key} = {$value} <br>";

}

if(isset($_COOKIE["fav_food"]))
{
    echo"BUY SOME {$_COOKIE["fav_food"]}";
}
else
{
    echo"No favourite food";
}




//$_SERVER

foreach($_SERVER as $_key => $value)
{
    echo "{$key} = {$value} <br>";
}

?>