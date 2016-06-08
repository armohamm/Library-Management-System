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
   	<h2 style="text-align:center">Borrow a book from the library</h2>
    <link rel="stylesheet" type="text/css" href="login.css">
   </head>
   <body>
    <div class='cover'></div>
    <div class='loginBox'>
   	  <form method="post" action="borrow1.php">
   	  	<input type="number" <?php if(isset($_GET['id'])) echo 'value="'.$_GET['id'].'"'; else echo 'placeholder="book id"';?> name="id"><br>
        <input type="password" placeholder="password" name="password">
        <input type="submit" name="submit">
   	  </form>
    </div>
      <?php
      if(isset($_SESSION["already"]))
        echo '<script>alert("You cannot issue more than 1 copy of the same book!")</script>';
      if(isset($_SESSION["succ"]))
        echo '<script>alert("Success!")</script>';
      if(isset($_SESSION["wrong"]))
        echo '<script>alert("Wrong Id or Password")</script>';
       if(isset($_SESSION["nocop"]))
        echo '<script>alert("No copies of this book available on the stack")</script>';
       if(isset($_SESSION["four"]))
        echo '<script>alert("You cannot issue more than 4 books!")</script>';
      unset($_SESSION["already"]);
      unset($_SESSION["succ"]);
      unset($_SESSION["wrong"]);
      unset($_SESSION["nocop"]);
      unset($_SESSION["four"]);
      ?>
    </div><div id='link' style="text-align:center">
    <a href="user_menu.php">Go back!</a></div>
   </body>
   </html>
