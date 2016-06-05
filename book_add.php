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
	</style>
	<body>
		<div class='cover'></div>
		 <form method="post" action="book_add1.php">

		 	<div id="f">
		 	Book name:
		 	<input type="text" name="name"><br>
		 </div>
		 <div id="g">
		 	Book author:
		 	<input type="text" name="author">
		 	<br>
		 </div>
		 <div id="h">
		 	No. of copies:
		 	<input type="number" name="copies"><br>
		 </div>
		 <div id="b">
		 <input type="submit">
		</div>
		 			 </form>
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