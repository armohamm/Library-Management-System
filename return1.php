<?php
session_start();include 'header.php';
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
$id=$_POST["ids"];
$pass=$_POST["password"];
$c=mysqli_query($conn,"SELECT * from user WHERE password='$pass'");
if(mysqli_num_rows($c)==0)
{
	$_SESSION["wrong"]=1;
	header("Location: return.php");
	exit();
}
$res=mysqli_query($conn,"SELECT * from book WHERE id='$id'");
if(mysqli_num_rows($res)==0)
{
	$_SESSION["wrong"]=1;
	header("Location: return.php");
	exit();
}
$r=mysqli_fetch_assoc($c);
$uid=$r['id'];
if(mysqli_num_rows(mysqli_query($conn,"select * from transaction where book_id='$id' and user_id='$uid'"))==0)
{
	$_SESSION["notiss"]=1;
	header("Location: return.php");
	exit();
}
while($row=mysqli_fetch_assoc($res))
{$onstack=$row['stack'];$cop=$row['no_of_copies'];}
$onstack++;
if($onstack>$cop)
{
	$_SESSION["cop"]=1;
	header("Location: return.php");
	exit();
}
$res=mysqli_query($conn,"UPDATE book SET stack='$onstack' WHERE id='$id'");
if(!$res)
	exit("Error Encountered: Connection Problems");
$iss=$r['books_issued'];
$iss--;
$res=mysqli_query($conn,"UPDATE user SET books_issued='$iss' WHERE password='$pass'");
if(!$res)
{
	echo "Error Encountered: Connection Problems";
	exit();
}
$res=mysqli_query($conn,"DELETE from transaction WHERE book_id='$id' AND user_id='$uid'");
$_SESSION["succe"]=1;
header("Location: return.php");
echo '</html>';
exit();
?>
