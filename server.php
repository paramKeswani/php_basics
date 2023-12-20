<?php

// foreach($_SERVER as $key => $value)
// {
//     echo "{$key} = {$value} <br>";
// }

$password ="pizza123";
$hash =password_hash($password ,PASSWORD_DEFAULT);
echo $hash;

if(password_verify("shakya",$hash))
{
    echo"you are logged in ";

}

else
{
    echo "Incorrect Password";
}

?>