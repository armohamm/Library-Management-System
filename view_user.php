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
		<h3 style="text-align:center"> View the current members!</h3>
	</head>
	<style type="text/css">
	#tab{
		margin-left: 350px;
		width: 40%;
		margin-bottom: 20px;
		margin-right: 480px;
		background-color: rgba(255,255,255,0.7);
	}
	#a{
		text-align: center;
	}
	</style>
	<body>
		<div class='cover'></div>
		<div id="tab">
		<table border=1>
			<tr>
				<th>User Id</th>
				<th>User Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Books Issued</th>
			</tr>
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
	</div><div id="a">
		<?php
		echo '<a href="book_menu.php">Go back to the menu</a>';
		?>
	</div>
	</body>
</html>