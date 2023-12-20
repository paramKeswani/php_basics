

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index5.php" method="post">
<!-- <label>username :</label>
<input type="text" name="username">
<label for="">password</label>
<input type="password"
name="password"> -->
<input type="submit" name="login" value="Log in">

    </form>
    
</body>
</html>
<?php
//isset()   return true if a variable is declared and  not null
//empty() returns true if varibale is not decvlared , false ,  null ,""
   $username = "param";
   echo isset($username); 

   $username = null;
   echo "<br>The below thing is null so nothing is displayed ";
   echo isset($username);

   echo "if you want to check if some button is clicked and all then we can use isset() eg <br>";
   
   if(isset($_POST["login"]))
   {
    echo "you are trying to login <br
    >";
   }

   foreach($_POST as $key => $value)
   {
    echo "{$key} = {$value} <br>";
   }


   echo "Just seea bit of radio buttons and checkboxs";

   echo"using functions and all<br>";

   function happy_birthday()
   {
    echo "happy birthday bheem <br>";
    echo "shakya muni <br> ";
   } 

   happy_birthday();

   function happybirthday($name)
   {
    echo "happy birthday {$name} <br>";
    echo "shakya muni <br> ";
   } 

   happybirthday("Square pants");

   echo "you can define like below thing<br>";
echo "now starting from string functions<br>";
$user = "Param";
echo "Param";

$user  = strtolower($user);



 $username = filter_input(INPUT_POST ,"username",FILTER_SANITIZE_SPECIAL_CHARS);

 $age = filter_input(INPUT_POST ,"age",FILTER_SANITIZE_NUMBER_INT);

 $email = filter_input(INPUT_POST ,"email",FILTER_SANITIZE_EMAIL);

 

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form action="index5.php" method="post">
    <label for="">username :</label>
    <input type="text" name="username">
    <input type="button" name="login" value="login" >
    </form>


 </head>
 <body>
    
 </body>
 </html>

 <?php

 if(isset($_POST["login"]))
 {
    $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    echo"Hello {$username}";
 }

 ?>