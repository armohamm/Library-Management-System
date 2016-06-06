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
   	<h2 style="text-align:center">Return a book to the library</h2>
   </head>
   <body>
    <div class='cover'></div>
    <div id='form' style="text-align:center">
   	  <form method="post" action="return1.php">
   	  	Book Id:
   	  	<select name='ids' class='select'>
          <?php
          $query=mysqli_query($conn,"select * from transaction where user_id='$uid'");
          while($r=mysqli_fetch_assoc($query))
          {
            echo '<option value="'.$r['book_id'].'">'.$r['book_id'].'</option>';
          }
          ?>
        </select>
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
    if(isset($_SESSION["notiss"]))
      echo '<script>alert("You have not issued this book!")</script>';
    if(isset($_SESSION["succe"]))
      echo '<script>alert("Success!")</script>';
    if(isset($_SESSION["wrong"]))
      echo '<script>alert("Wrong Id or Password!")</script>';
    unset($_SESSION["wrong"]);
    unset($_SESSION["notiss"]);
    unset($_SESSION["succe"]);
    unset($_SESSION["cop"]);?>
    <div id='link' style="text-align:center">
      <a href="user_menu.php">Go back!</a>
    </div>
   </body>
   </html>
