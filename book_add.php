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
 ?>
	<head>
		<h3 style="text-align:center">
				Add a book!</h3>
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<style type="text/css">
	#b{
		text-align: center;
	}
	</style>
	<body>
		<div class='cover'></div>
		<div class='loginBox'>
		 <form method="post" action="book_add1.php">
		 	<input type="text" placeholder="book name" name="name">
		 	<input type="text" placeholder="author" name="author">
		 	<input type="number" placeholder="no. of copies" name="copies">
		    <input type="submit">
			 </form>
			</div>
		<p>
			<?php
			if(isset($_SESSION["empty"]))
				echo '<script>alert("One or more empty fields")</script>';
			unset($_SESSION["empty"]);
			if(isset($_SESSION["success"]))
				echo '<script>alert("Success!")</script>';
			unset($_SESSION["success"]);
			?>
		</p>
		<div id="b">
          <a href="book_menu.php">Go back!</a>
      </div>
	</body>
</html>