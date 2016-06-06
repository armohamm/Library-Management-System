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
		<h3 style="text-align:center">Edit a book!</h3>
	</head>
	<style type="text/css">
	#f{
		text-align: center;
	    margin-bottom: 10px;
	}
	#g{
		text-align: center;
		margin-bottom: 10px;
	}
	#h{
		text-align: center;
		margin-bottom: 10px;
	}
	#b{
		text-align: center;
	}
	#r{
		text-align: center;
		margin-bottom: 10px;
	}
	</style>
	<body>
		<div class='cover'></div>
		 <form method="post" action="edit1.php?id=<?php echo $_GET['id'];?>">
		 	<div id=r>
		 	Book Id :
		  <?php 
		  echo $_GET['id'];$id=$_GET['id'];
		 $row=mysqli_fetch_assoc(mysqli_query($conn,"select * from book where id='$id'"));
		 	?>
		 </div>
		 	<div id="f">
		 	Book name:
		 	<input type="text" name="name" value="<?php echo $row['name'];?>"><br>
		 </div>
		 <div id="g">
		 	Book author:
		 	<input type="text" name="author" value="<?php echo $row['author'];?>">
		 	<br>
		 </div>
		 <div id="h">
		 	No. of copies:
		 	<input type="number" name="copies" value="<?php echo $row['no_of_copies'];?>"><br>
		 </div>
		 <div id="b">
		 <input type="submit">
		</div>
		 			 </form>
		<p>
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
		<div id="b">
          <a href="book_view.php">Go back!</a>
      </div>
	</body>
</html>