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
<style type="text/css">
#tab{
  text-align: center;
  margin-left: 450px;
  margin-bottom: 20px;
  margin-right: 410px;
  background-color: rgba(255,255,255,.6);
}
#link{
  text-align: center;
}
</style>
<head>
	<h3 style="text-align:center">View Your Profile!</h3>
</head>
<body>
  <div class='cover'></div>
  <div id='tab'>
      <table border=1 style="width: 50%">
      	<tr>
      		    <th>User Id</th>
				<th>User Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Books Issued</th>
      	</tr>
        <tr>
        	<?php
        	$us=$_SESSION["username"];
        	$p=$_SESSION["password"];
        	$res=mysqli_query($conn,"SELECT * from user where email='$us' AND password='$p'");
        	$row=mysqli_fetch_assoc($res);
        	echo "<td>".$row['id']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['password']."</td>";
			echo "<td>".$row['books_issued']."</td>";
			?>
        </tr>
    </table>
  </div><div id='link'>
     <a href="user_menu.php">Go back to the menu!</a>
   </div>
</body>
</html>