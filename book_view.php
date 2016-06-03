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
		<h3 style="text-align:center"> View the books!</h3>
	</head>
	<style type="text/css">
	#tab{
		text-align: center;
		margin-left: 300px;
		margin-right: 350px;
		background-color: rgba(255,255,255,.7);
	}
	#a{
		text-align: center;
		margin-top: 20px;
	}
	.edits{
		text-align: center;
	}
	</style>
	<body>
		<div class='cover'></div>
		<div id="tab">
		<table border=1>
			<tr>
				<th>Book Id</th>
				<th>Book Name</th>
				<th>Author</th>
				<th>No of Copies</th>
				<th>Currently in Stock</th>
				<?php if(isset($_SESSION["authuser"]))
				echo "<th>Action</th>";
				?>
			</tr>
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
			        	echo "</tr>";
			        }
			     ?>
			 </table>
	</div>
	<div id="a">
		<?php
		echo '<a href="book_menu.php">Go back to the menu</a>';
		?>
	</div>
	</body>
</html>