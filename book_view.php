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
	  ?>
	<head>
		<link rel="stylesheet" type="text/css" href="table.css">
		<link rel="stylesheet" type="text/css" href="goback.css">
		<h3 style="text-align:center;color:#fff"> View the books!</h3>
	</head>
	<style type="text/css">
	</style>
	<body>
		<div class='cover'></div>
		<div class='tbl-header'>
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<th>Book Id</th>
				<th>Book Name</th>
				<th>Author</th>
				<th>No of Copies</th>
				<th>Currently in Stock</th>
				<th>Action</th>
			</tr>
		</table>
	</div>
	<div class='tbl-content'>
		<table cellpadding="0" cellspacing="0" border="0">
			<?php

			     $sql="SELECT * from book";
			     $res=mysqli_query($conn,$sql);
			     while($row=mysqli_fetch_assoc($res))
			        {
			        	echo "<tr>";
			        	echo "<td>".$row['id']."</td>";
			        	echo "<td>".$row['name']."</td>";
			        	echo "<td>".$row['author']."</td>";
			        	echo "<td>".$row['no_of_copies']."</td>";
			        	echo "<td>".$row['stack']."</td>";
			        	if(isset($_SESSION["authuser"]))
			        	echo '<td><a href="edit.php?id='.$row['id'].'">Edit</a></td>';
			            else
			            echo '<td><a href="borrow.php?id='.$row['id'].'">Borrow</a></td>';
			        	echo "</tr>";
			        }
			     ?>
			 </table>
	</div>
	<div class='goBack'>
		<?php
		echo '<a href="book_menu.php">Go back to the menu</a>';
		?>
	</div>
	</body>
</html>