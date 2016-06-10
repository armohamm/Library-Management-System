<?php
session_start();
if(!(isset($_SESSION["authuser"])))
  {
      header("Location: user_menu.php");
  }
  elseif (!(isset($_SESSION["authuser"])) && !(isset($_SESSION["user"])))
  {
  	    $_SESSION["notlogged"]=1;
      header("Location: index.php");
      exit();
  }
  include 'header.php';
 ?>
 	<head><link rel='shortcut icon' type='image/ico' href='favicon.ico'><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true"><link rel="stylesheet" type="text/css" href="menu.css">
 		<h2 style="text-align:center;color:#fff"> Menu for the Librarian!</h2>
 	</head>
  <style type="text/css">

    </style>
 	<body>
    <div class='cover'></div>
    <div class='container1'>
      <div class="menu-item">
 			<a href="book_add.php"><i class="fa fa-plus" style="font-size:64px"></i></a>
      </div><div class="menu-item">
 			<a href="book_view.php"><i class="fa fa-book" style="font-size:64px"></i></a>
      </div><div class="menu-item">
 			<a href="book_del.php"><i class="fa fa-minus" style="font-size:64px"></i></a>
      </div></div><div class='container2'><div class="menu-item2">
 			<a href="view_user.php"><i class="fa fa-user" style="font-size:64px"></i></a>
    </div>
    <div class="menu-item2">
      <a href="transaction1.php"><i class="fa fa-list" style="font-size:64px"></i></a>
    </div>
     </div>
    </p>
 	</body>
 </html>