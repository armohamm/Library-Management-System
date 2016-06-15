<?php
session_start();
if((isset($_SESSION["user"])) || (isset($_SESSION["authuser"])))
	{ 
          header("Location: book_menu.php");
     exit();
 }
$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];
$conn = mysqli_connect("mysql.hostinger.in", "u346184727_root", "devansh","u346184727_lib");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$password = $_POST["password"];
$username = $_POST["username"];
$sql="SELECT * from user where email='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if(!(mysqli_num_rows($result)==1))
{
	$_SESSION["check"]=1;
  header("Location: index.php");
  exit();
}
$_SESSION["user"]=1;
if($username=="root@123")
$_SESSION["authuser"]=1;
/*header("Location: book_menu.php");*/
echo '<meta http-equiv="refresh" content="0; URL=book_menu.php">';
exit();
mysqli_close($conn);
?>