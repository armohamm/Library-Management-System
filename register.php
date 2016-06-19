<?php
session_start();
include 'header.php';
if(isset($_SESSION["user"]) || isset($_SESSION["authuser"]))
{
  header("Location: book_menu.php");
  exit();
}
$username="u346184727_root";
$password="devansh";
$servername="mysql.hostinger.in";
$dbname="u346184727_lib";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
	die("Connection Failed: ").mysqli_connect_error();
$name=$_POST["name"];
if($name=="root")
$_SESSION["emailtaken"]=1;
$email=$_POST["email"];
$pass=$_POST["password"];
if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"]))
{
	$_SESSION["emptyfields"]=1;
	header("Location: register1.php");
	exit();
}
$sql="INSERT into user VALUES (NULL,'$name','$email','$pass',0)";
$res=mysqli_query($conn,$sql);
if(!$res)
   {
   	$_SESSION["emailtaken"]=1;
   	header("Location: register1.php");
   	exit();
   }
$result=mysqli_query($conn,"SELECT * from user WHERE email='$email'");
 $row = mysqli_fetch_assoc($result);
 $_SESSION["user"]=2;
 $_SESSION["id"]=$row['id'];
 header("Location: user_menu.php");
 exit();
 ?>