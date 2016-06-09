<?php
session_start();
include 'header.php';
if(!isset($_SESSION["user"]) && !isset($_SESSION["authuser"]))
{
	$_SESSION["notlogged"]=1;
      header("Location: index.php");
      exit();
}
$conn=mysqli_connect("localhost","root","devansh2497","library");
if(!$conn)
{
  die("Connection Problems").mysqli_connect_error();
}
$email=$_SESSION["username"];
$row=mysqli_fetch_assoc(mysqli_query($conn,"select * from user where email='$email'"));
$uid=$row['id'];
$res=mysqli_num_rows(mysqli_query($conn,"select * from transaction where user_id='$uid'"));
if($res==0)
{
  $_SESSION["nobooks"]=1;
  header("Location: user_menu.php");
  exit();
}
?>
   <head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="goback.css">
   	<h2 style="text-align:center;color:#fff">Return a book to the library</h2>
   </head>
   <style type="text/css">
   .select{
  width: 330px;
  height: 40px;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: #fff;
  font-family: 'Exo', sans-serif;
  font-size: 22px;
  font-weight: 400;
  padding: 4px;
   }
   .select:focus{
    outline: none;
  border: 1px solid rgba(255,255,255,0.9);
   }
   </style>
   <body>
    <div class='cover'></div>
    <div class='loginBox'>
   	  <form method="post" action="return1.php">
   	  	<select name='ids' class='select'>
          <?php
          if(isset($_GET["id"]))
            echo '<option value="'.$_GET["id"].'">'.$_GET["id"].'</option>';
          else
          {
          $query=mysqli_query($conn,"select * from transaction where user_id='$uid'");
          while($r=mysqli_fetch_assoc($query))
          {
            echo '<option value="'.$r['book_id'].'">'.$r['book_id'].'</option>';
          }
        }
          ?>
        </select>
        <input type="password" placeholder="password" name="password">
        <input type="submit">
   	  </form>
    </div>
    <?php
    if(isset($_SESSION["cop"]))
      echo '<script>alert("All copies of this book are already on the stack!")</script>';
    if(isset($_SESSION["notiss"]))
      echo '<script>alert("You have not issued this book!")</script>';
    if(isset($_SESSION["succed"]))
      echo '<script>alert("Success!")</script>';
    if(isset($_SESSION["wrong"]))
      echo '<script>alert("Wrong Id or Password!")</script>';
    unset($_SESSION["wrong"]);
    unset($_SESSION["notiss"]);
    unset($_SESSION["succed"]);
    unset($_SESSION["cop"]);?>
    <div class='goBack'>
      <a href="user_menu.php">Go back!</a>
    </div>
   </body>
   </html>
