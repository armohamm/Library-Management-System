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
   	<h2>Return a book to the library</h2>
   </head>
   <body>
   	  <form method="post" action="return1.php">
   	  	Book Id:<br>
   	  	<input type="number" name="id"><br>
        Your Password:<br>
        <input type="password" name="password"><br>
        <input type="submit">
   	  </form>
   </body>
   </html>
