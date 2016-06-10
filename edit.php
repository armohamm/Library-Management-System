<?php
session_start();
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
  include 'header.php';

$conn = mysqli_connect("localhost", "root", "devansh2497","library");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
 ?>
	<head>
		<link rel='shortcut icon' type='image/ico' href='favicon.ico'>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
		<link rel="stylesheet" type="text/css" href="login.css">
		<link rel="stylesheet" type="text/css" href="goback.css">
		<h3 style="text-align:center">Edit a book!</h3>
	</head>
	<style type="text/css">
	</style>
	<body>
		<div class='cover'></div>
		<div class='loginBox'>
		 <form method="post" action="edit1.php?id=<?php echo $_GET['id'];?>">
		 	Book Id:
		  <?php 
		  echo $_GET['id'];$id=$_GET['id'];
		 $row=mysqli_fetch_assoc(mysqli_query($conn,"select * from book where id='$id'"));
		 	?><br>
		 	<input type="text"  placeholder="book name"name="name" value="<?php echo $row['name'];?>">
		 	<input type="text" placeholder="author" name="author" value="<?php echo $row['author'];?>">
		 	<input type="number" placeholder="no. of copies" name="copies" value="<?php echo $row['no_of_copies'];?>"><br>
		    <input type="submit">
		 			 </form>
		 			</div>
			<?php
			if(isset($_SESSION["empty"]))
				echo '<script>alert("One or more empty fields!")</script>';
			unset($_SESSION["empty"]);
			if(isset($_SESSION["zerocop"]))
				echo '<script>alert("Copies cannot be less than zero!")</script>';
			unset($_SESSION["zerocop"]);
			if(isset($_SESSION["succ"]))
				echo '<script>alert("Success!")</script>';
			unset($_SESSION["succ"]);
			?>
		</p>
		<div class='goBack'>
          <a href="book_view.php">Go back!</a>
      </div>
	</body>
</html>