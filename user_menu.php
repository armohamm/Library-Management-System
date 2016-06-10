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
</style>
     <head><link rel='shortcut icon' type='image/ico' href='favicon.ico'>
          <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
           <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true"><link rel="stylesheet" type="text/css" href="menu.css">
          <div class='a'>
     	 <h2 style="text-align:center;color:#fff">Menu for the User!</h2>
          </div>
     	</head>
     <body>
          <div class='cover'></div>
          <div class='container1'>
          <div class='menu-item'>
     	<a href="borrow.php"><i class='fa fa-plus' style="font-size:64px"></i></a>
     </div><div class='menu-item'>
     	<a href="book_view.php"><i class='fa fa-book' style="font-size:64px"></i></a>
     </div><div class='menu-item'>
     	<a href="return.php"><i class='fa fa-minus' style="font-size:64px"></i></a>
     </div></div><div class='container2'><div class='menu-item2'>
          <a href="stat.php"><i class='fa fa-user' style="font-size:64px"></i></a>
     </div>
     <div class='menu-item2'>
          <a href="transaction.php"><i class='fa fa-list' style="font-size:64px"></i></a>
     </div>
     </div>
     <?php
     if(isset($_SESSION["nobooks"]))
          echo '<script>alert("You have no books to return")</script>';
     unset($_SESSION["nobooks"]);
     if(isset($_SESSION["nobook"]))
          echo '<script>alert("You have not borrowed any books!")</script>';
     unset($_SESSION["nobook"]);
     ?>
     </body>
     </html>