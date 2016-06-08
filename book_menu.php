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
 	<head>
 		<h2 style="text-align:center"> Menu for the Librarian!</h2>
 	</head>
  <style type="text/css">
  .menu-item{
    display: inline-block;  
    text-decoration: none;
    margin-right: 64px;
  }
    .menu-item a{
      border-radius: 50%;
    padding:60px;
      width: 100px;
      height: 100px;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
    background-color: #f1f1f1;
    text-align: center;
    color: #ffa100;
  }
  .menu-item a:hover{
    background-color: #ffa100;
    color: #f1f1f1;
  }
  .container1{
    margin: 0 auto;
    width: 69%;
    height: 220px;
  }
  .container2{
    margin: 0 auto;
    width: 46%;
    height: 220px;
  }
    </style>
 	<body>
    <div class='cover'></div>
    <div class='container1'>
      <div class="menu-item">
 			<a href="book_add.php"><i class="fa fa-plus" style="font-size:112px"></i></a>
      </div><div class="menu-item">
 			<a href="book_view.php"><i class="fa fa-book" style="font-size:112px"></i></a>
      </div><div class="menu-item">
 			<a href="book_del.php"><i class="fa fa-minus" style="font-size:112px"></i></a>
      </div></div><div class='container2'><div class="menu-item">
 			<a href="view_user.php"><i class="fa fa-user" style="font-size:112px"></i></a>
    </div>
    <div class="menu-item">
      <a href="transaction1.php"><i class="fa fa-list" style="font-size:112px"></i></a>
    </div>
     </div>
    </p>
 	</body>
 </html>