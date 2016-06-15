<?php
session_start();
if(!isset($_SESSION["user"]) && !isset($_SESSION["authuser"]))
{
	$_SESSION["notlogged"]=1;
      header("Location: index.php");
      exit();
}
$conn=mysqli_connect("mysql.hostinger.in","u346184727_root","devansh","u346184727_lib");
if(!$conn)
{
  die("Connection Problems").mysqli_connect_error();
}
$email=$_SESSION["username"];
$row=mysqli_fetch_assoc(mysqli_query($conn,"select * from user where email='$email'"));
$uid=$row['id'];
$res=mysqli_num_rows(mysqli_query($conn,"select * from transaction where user_id='$uid'"));
if($res==0)
  echo 'You have not borrowed any books';
?>