<?php
session_start();
include 'header.php';
if(!(isset($_SESSION["authuser"])) && !(isset($_SESSION["user"])))
  {
      $_SESSION["notlogged"]=1;
      header("Location: index.php");
      exit();
  }
  elseif (!(isset($_SESSION["authuser"])))
  {
        header("Location: user_menu.php");
  }
$conn = mysqli_connect("localhost", "root", "devansh2497","library");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_POST["ids"];
$cop=$_POST["copies"];
$res=mysqli_query($conn,"SELECT * from book WHERE id='$id'");
$rows=mysqli_num_rows($res);
if($rows==0)
{
	echo "Error Encountered: Wrong Id";
  exit();
}
else
{
    while($row=mysqli_fetch_assoc($res))
    	{$prevcop=$row['no_of_copies'];$stack=$row['stack'];}
    $stack-=$cop;
    $prevcop-=$cop;
    if($prevcop<0)
    {
      $_SESSION["zerocop"]=1;
      header("Location: book_del.php");
      exit();
    }
    $res=mysqli_query($conn,"UPDATE book SET no_of_copies='$prevcop',stack='$stack' WHERE id='$id'");
    if(!$res)
    	exit("Error Encountered: Connection Problem");
    $_SESSION["success"]=1;
    header("Location: book_del.php");
}
?>