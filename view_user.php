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
	 $conn=mysqli_connect("mysql.hostinger.in","u346184727_root","devansh","u346184727_lib");
	 if(!$conn)
	      die("Connection Error: ").mysqli_connect_error();
?>
	<head>
		<link rel='shortcut icon' type='image/ico' href='favicon.ico'>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
		<link rel="stylesheet" type="text/css" href="table.css">
		<link rel="stylesheet" type="text/css" href="goback.css">
		<h3 style="text-align:center;color:#fff"> View the current members!</h3>
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
				<th>Email</th>
				<th>Password</th>
				<th>Books Issued</th>
			</tr>
		</table>
	</div>
	<div class='tbl-content'>
		<table cellpadding="0" cellspacing="0" border="0">
			<?php

			     $sql="SELECT * from user";
			     $res=mysqli_query($conn,$sql);
			     while($row=mysqli_fetch_assoc($res))
			        {
			        	echo "<tr>";
			        	echo "<td>".$row['id']."</td>";
			        	echo "<td>".$row['name']."</td>";
			        	echo "<td>".$row['email']."</td>";
			        	echo "<td>".$row['password']."</td>";
			        	echo "<td>".$row['books_issued']."</td>";
			        	echo "</tr>";
			        }
			     ?>
		</table>
	</div><div class='goBack'>
		<?php
		echo '<input type="button" id="go" value="Go Back!" onclick="back()">';
		?>
	</div>
	</body>
</html>