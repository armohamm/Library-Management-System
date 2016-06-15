<?php
session_start();
if(!(isset($_SESSION["authuser"])) && !(isset($_SESSION["user"])))
  {
      $_SESSION["notlogged"]=1;
      header("Location: index.php");
      exit();
  }
	 $conn=mysqli_connect("mysql.hostinger.in","u346184727_root","devansh","u346184727_lib");
	 if(!$conn)
	      die("Connection Error: ").mysqli_connect_error();
$email=$_SESSION["username"];
$row=mysqli_fetch_assoc(mysqli_query($conn,"select * from user where email='$email'"));
$uid=$row['id'];
$name=$row['name'];
$res=mysqli_num_rows(mysqli_query($conn,"select * from transaction where user_id='$uid'"));
if($res==0)
  echo 'You have not borrowed any books!';
?>