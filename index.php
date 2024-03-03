<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['email'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Welcome!</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>welcome</span></h3>
      <h1> <span><?php echo $_SESSION['name'] ?></span></h1>
      <p>These are your program list</p>
      <a href="program1.php">1. Create a pattern program</a> <br> <br> 
      <a href="program2.php">2. Write a program to check a year is leap year or not. [take textbox as input]</a> <br> <br> 
      <a href="program3.php">
      3. Write a simple calculator program in PHP using switch case
      Description:
      You need to write a simple calculator program in PHP using switch case.<br> 
      Operations:
      • Addition
      • Subtraction
      • Multiplication
      • Division </a> <br> <br> 
      <a href="program4.php">4. Write a php program to check a number palindrome or not.</a> <br> <br>  
      <a href="program5.php">5. Create a php program which find factorial of number recursively using function.</a> <br> <br>  
      <a href="program6.php">6. Write a php function that checks if a string is all lower case.</a> <br> <br>  
      <a href="program7.php">7. Write a php script that retrieve registration data from database and display it on web page </a> <br> <br>  
      <a href="program8.php">8. Create a php code to upload an image and display it on the page </a> <br> <br>  
      <a href="program9.php">9. Write a simple program that create, set and delete a cookie in php </a> <br> <br> 


      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>