<?php
session_start();
include 'header.php';
if(!isset($_SESSION["user"]) && !isset($_SESSION["authuser"]))
{
	$_SESSION["notlogged"]=1;
      header("Location: index.php");
      exit();
}
?>
   <head>
   	<h2 style="text-align:center">Return a book to the library</h2>
   </head>
   <body>
    <div class='cover'></div>
    <div id='form' style="text-align:center">
   	  <form method="post" action="return1.php">
   	  	Book Id:
   	  	<input type="number" name="id"><br>
        <div id='a' style="margin-top:20px">
        Your Password:
        <input type="password" name="password">
        <input type="submit">
      </div>
   	  </form>
    </div>
    <?php
    if(isset($_SESSION["cop"]))
      echo '<script>alert("All copies of this book are already on the stack!")</script>';
    if(isset($_SESSION["succ"]))
      echo '<script>alert("Success!")</script>';
    if(isset($_SESSION["wrong"]))
      echo '<script>alert("Wrong Id or Password!")</script>';
    unset($_SESSION["wrong"]);
    unset($_SESSION["succ"]);
    unset($_SESSION["cop"]);?>
    <div id='link' style="text-align:center">
      <a href="user_menu.php">Go back!</a>
    </div>
   </body>
   </html>
