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
 .elem{
    display: inline-block;  
    text-decoration: none;
    margin-right: 64px;
  }
    .elem a{
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
  .elem a:hover{
    background-color: #ffa100;
    color: #f1f1f1;
  }
  .container1-umen{
    margin: 0 auto;
    width: 70%;
    height: 220px;
  }
  .container2-umen{
    margin: 0 auto;
    width: 46%;
    height: 220px;
  }
</style>
     <head>
          <div class='a'>
     	 <h2>Menu for the User!</h2>
          </div>
     	</head>
     <body>
          <div class='cover'></div>
          <div class='container1-umen'>
          <div class='elem'>
     	<a href="borrow.php"><i class='fa fa-plus' style="font-size:112px"></i></a>
     </div><div class='elem'>
     	<a href="book_view.php"><i class='fa fa-book' style="font-size:112px"></i></a>
     </div><div class='elem'>
     	<a href="return.php"><i class='fa fa-minus' style="font-size:112px"></i></a>
     </div></div><div class='container2-umen'><div class='elem'>
          <a href="stat.php"><i class='fa fa-user' style="font-size:112px"></i></a>
     </div>
     <div class='elem'>
          <a href="transaction.php"><i class='fa fa-list' style="font-size:112px"></i></a>
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