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
	 $conn=mysqli_connect("localhost","root","devansh2497","library");
	 if(!$conn)
	      die("Connection Error: ").mysqli_connect_error();
?>
	<head>
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
		echo '<a href="book_menu.php">Go back to the menu</a>';
		?>
	</div>
	</body>
</html>