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
		<h3 style="text-align:center"> View the currently borrowed books!</h3>
	</head>
	<style type="text/css">
	#tab{
		text-align: center;
		margin-left: 500px;
		margin-bottom: 20px;
		margin-right: 500px;
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
				<th>Book Id</th>
				<th>Book Name</th>
			</tr>
			<?php
			     $sql="SELECT * from transaction";
			     $res=mysqli_query($conn,$sql);
			     while($row=mysqli_fetch_assoc($res))
			        {
			        	echo "<tr>";
			        	$uid=$row['user_id'];
			        	$bq=mysqli_fetch_assoc(mysqli_query($conn,"select * from user where id='$uid'"));
			        	$name=$bq['name'];
			        	echo "<td>".$uid."</td>";
			        	echo "<td>".$name."</td>";
			        	$bid=$row['book_id'];
			        	echo "<td>".$bid."</td>";
			        	$b=mysqli_fetch_assoc(mysqli_query($conn,"select * from book where id='$bid'"));
			        	$bname=$b['name'];
			        	echo "<td>".$bname."</td>";
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