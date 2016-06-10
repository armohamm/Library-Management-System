<?php
session_start();
include 'header.php';
if(!(isset($_SESSION["authuser"])) && !(isset($_SESSION["user"])))
  {
      $_SESSION["notlogged"]=1;
      header("Location: index.php");
      exit();
  }
	 $conn=mysqli_connect("localhost","root","devansh2497","library");
	 if(!$conn)
	      die("Connection Error: ").mysqli_connect_error();
$email=$_SESSION["username"];
$row=mysqli_fetch_assoc(mysqli_query($conn,"select * from user where email='$email'"));
$uid=$row['id'];
$name=$row['name'];
$res=mysqli_num_rows(mysqli_query($conn,"select * from transaction where user_id='$uid'"));
if($res==0)
{
  $_SESSION["nobook"]=1;
  header("Location: user_menu.php");
  exit();
}
?>
	<head>
		<link rel='shortcut icon' type='image/ico' href='favicon.ico'>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
		<link rel="stylesheet" type="text/css" href="table.css">
		<link rel="stylesheet" type="text/css" href="goback.css">
		<h3 style="text-align:center;color:#fff"> View the currently borrowed books!</h3>
	</head>
	<style type="text/css">
	#a{
		text-align: center;
	}
	</style>
	<body>
		<div class='cover'></div>
		<div class='tbl-header'>
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<th>User Id</th>
				<th>User Name</th>
				<th>Book Id</th>
				<th>Book Name</th>
				<th>Action</th>
			</tr>
		</table>
	</div>
	<div class='tbl-content'>
		<table cellpadding="0" cellspacing="0" border="0">
			<?php
			     $sql="SELECT * from transaction where user_id='$uid'";
			     $res=mysqli_query($conn,$sql);
			     while($row=mysqli_fetch_assoc($res))
			        {
			        	echo "<tr>";
			        	echo "<td>".$row['user_id']."</td>";
			        	echo "<td>".$name."</td>";
			        	$bid=$row['book_id'];
			        	echo "<td>".$bid."</td>";
			        	$b=mysqli_fetch_assoc(mysqli_query($conn,"select * from book where id='$bid'"));
			        	$bname=$b['name'];
			        	echo "<td>".$bname."</td>";
			        	echo '<td><a href="return.php?id='.$bid.'">Return</a></td>';
			        	echo "</tr>";
			        }
			     ?>
		</table>
	</div><div class='goBack'>
		<?php
		echo '<a href="user_menu.php">Go back to the menu</a>';
		?>
	</div>
	</body>
</html>