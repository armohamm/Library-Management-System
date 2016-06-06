<?php
session_start();include 'header.php';
if(!isset($_SESSION["user"]) && !isset($_SESSION["authuser"]))
{
	$_SESSION["notlogged"]=1;
      header("Location: index.php");
      exit();
}
?>
<style type="text/css">
.a{
     text-align: center;
     margin-bottom: 10px;
}
.box{
     background-color: rgba(255,255,255,.6);
     margin-left: 500px;
     margin-right: 500px;
}
</style>
     <head>
          <div class='a'>
     	 <h2>Menu for the User!</h2>
          </div>
     	</head>
     <body>
          <div class="box">
          <div class='cover'></div>
          <div class='a'>
     	<a href="borrow.php">Click Here to borrow a book</a><br>
     </div><div class='a'>
     	<a href="book_view.php">Click Here to see the book list</a><br>
     </div><div class='a'>
     	<a href="return.php">Click Here to return a book</a><br>
     </div><div class='a'>
          <a href="stat.php">Click Here to view your profile</a>
     </div>
     </div>
     <?php 
     if(isset($_SESSION["nobooks"]))
          echo '<script>alert("You have no books to return")</script>';
     unset($_SESSION["nobooks"]);
     ?>
     </body>
     </html>