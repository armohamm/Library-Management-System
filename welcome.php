<?php
session_start();
include 'header.php';
if((isset($_SESSION["user"])) || (isset($_SESSION["authuser"])))
	{ 
          header("Location: book_menu.php");
     exit();
 }
$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];
$conn = mysqli_connect("localhost", "root", "devansh2497","library");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$password = $_POST["password"];
$username = $_POST["username"];
$sql="SELECT * from user where name='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if(!(mysqli_num_rows($result)==1))
{
	$_SESSION["check"]=1;
  header("Location: index.php");
  exit();
}
$_SESSION["user"]=1;
if($username=="root")
$_SESSION["authuser"]=1;
header("Location: book_menu.php");
echo '</html>';
mysqli_close($conn);
?>
	