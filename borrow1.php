<?php
session_start();
include 'header.php';
if(!isset($_SESSION["user"]) && !isset($_SESSION["authuser"]))
{
$_SESSION["notlogged"]=1;
      header("Location: index.php");
      exit();
}
$conn = mysqli_connect("localhost", "root", "devansh2497","library");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_POST["id"];
$pass=$_POST["password"];
$c=mysqli_query($conn,"SELECT * from user WHERE password='$pass'");
if(!$c)
{
	echo "Error Encountered: Wrong password";
	exit();
}
$res=mysqli_query($conn,"SELECT * from book WHERE id='$id'");
if(!$res)
{
	echo"Error Encountered: Wrong Id";
	exit();
}
while($row=mysqli_fetch_assoc($res))
$onstack=$row['stack'];
if($onstack==0)
{
	echo "Error Encountered: No copies available on the stack";
	exit();
}
$onstack-=1;
$res=mysqli_query($conn,"UPDATE book SET stack='$onstack' WHERE id='$id'");
if(!$res)
	exit("Error Encountered: Wrong Id");
$row=mysqli_fetch_assoc($c);
$iss=$row['books_issued'];
$iss++;
if($iss>4)
{
	echo "Error Encountered: You cannot issue more than 4 books!";
	exit();
}
$res2=mysqli_query($conn,"UPDATE user SET books_issued='$iss' WHERE password='$pass'");
if(!$res2)
	exit("Error Encountered: Wrong password");
echo "Success";
echo "<br><a href=\"user_menu.php\">Go back to the menu!</a>";
echo '</html>';
?>
