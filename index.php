<?php
 
 declare (strict_types = 1);
 include 'Inc/autoload.inc.php';


?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8" />
   <meta name="descriptions" content="" />
   <meta name="keywords" content="" />
   <meta name="author" content="Yahaya Yusuf" />
   <meta name="robots" content="nofollow" />
   <meta httq-equiv="refresh" content="" />
   <meta name="expires" content="" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title>
     Simple Web Calculator
   </title>

   <link href=".css" type="text/css" rel="stylesheet" />

   <script src=".js" >
    
   </script>

 </head>

 <body>
   
   <form action="Inc/samu.inc.php" method="POST" >
    
    <p> Simple Web Calculator </p>
    <input type="number" name="first_num" placeholder="first number" />

     <select name="symbol" >
      <option  value="add"> Addition </option>
      <option  value="sub"> Subtraction </option>
      <option  value="mul"> Multiplication </option>
      <option  value="div"> Division </option>
     </select>

    <input type="number" name="second_num" placeholder="second number" />
    <input type="submit" placeholder="Calculate" />
    
   </form>

 </body>
</html>
