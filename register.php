<?php
session_start();
include 'header.php';
if(isset($_SESSION["user"]) || isset($_SESSION["authuser"]))
{
  header("Location: book_menu.php");
  exit();
}
$username="root";
$password="devansh2497";
$servername="localhost";
$dbname="library";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
	die("Connection Failed: ").mysqli_connect_error();
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["password"];
if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"]))
{
	echo "Empty Fields Cannot be Processed<br>";
	echo '<a href="register1.php">Go Back!</a>';
	exit();
}
$sql="INSERT into user VALUES (NULL,'$name','$email','$pass',0)";
$res=mysqli_query($conn,$sql);
if(!$res)
   {
   	echo "Error Encountered";
   	exit();
   }
echo "Welcome to our library ".$_POST["name"];
$result=mysqli_query($conn,"SELECT * from user WHERE email='$email'");
 while($row = mysqli_fetch_assoc($result))
 {
 	echo "<br> Your User Id no. is: ".$row["id"];
	$_SESSION["user"]=2;
	echo "<br>Go to the User Menu!<br><a href=\"user_menu.php\">Click here for the User Menu</a>";
 }
 echo "</html>";
 mysqli_close($conn);
?>

