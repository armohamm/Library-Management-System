<?php 
session_start();
if(isset($_SESSION["user"]) || isset($_SESSION["authuser"]))
{
  header("Location: book_menu.php");
  exit();
}
include 'header.php';
?>
<style type="text/css">
</style>
<head>
  <link rel="stylesheet" type="text/css" href="login.css">
	<h2 style="text-align:center;color:#fff">Register with us now!</h2>
</head>
<body>
  <div class='cover'></div>
  <div class='loginBox'>
        <form method="post" action="register.php">
           <input type="text" placeholder="name" name="name">
           <input type="text" placeholder="email" name="email">
           <input type="password" placeholder="password" name="password">
           <input type="submit">
          </form>
        </div>
    <?php
    if(isset($_SESSION["emptyfields"]))
      echo '<script>alert("Empty Fields")</script>';
    if(isset($_SESSION["emailtaken"]))
      echo '<script>alert("Account already exists")</script>';
    unset($_SESSION["emailtaken"]);
    unset($_SESSION["emptyfields"]);
    ?>
</body>
</html>