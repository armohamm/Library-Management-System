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
  .a{
    text-align: center;
    margin-bottom: 10px;
  }
  .form{      
    background-color: rgba(255,255,255,.7);
    margin-left: 450px;
    margin-right: 450px;

  }
    </style>
 	<body>
    <div class='cover'></div>
    <div class='form'>
 		<p>
      <div class="a">
 			<a href="book_add.php">Click Here to add a book!</a><br>
      </div><div class="a">
 			<a href="book_view.php">Click Here to view the books!</a><br>
      </div><div class="a">
 			<a href="book_del.php">Click Here to delete a book!</a><br>
      </div><div class="a">
 			<a href="view_user.php">Click Here to see the current members of the library!</a>
    </div>
 					</p>
        <p>
     </div>
    </p>
 	</body>
 </html>