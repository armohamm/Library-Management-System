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
  $conn = mysqli_connect("localhost", "root", "devansh2497","library");
    if (!$conn) 
      die("Connection failed: " . mysqli_connect_error());
  include 'header.php';
 ?>
 <style type="text/css">
.select{
  width: 330px;
  height: 40px;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: #fff;
  font-family: 'Exo', sans-serif;
  font-size: 22px;
  font-weight: 400;
  padding: 4px;
   }
   .select:focus{
    outline: none;
  border: 1px solid rgba(255,255,255,0.9);
   }
.backg{
	background-color: #d39686;
	color: #fff;
}

}
 </style>
	<head>
		<link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="goback.css">
		<h3 style="text-align:center;color:#fff"> Delete a book!</h3>
	</head>
	<body>
		<div class='cover'></div>
		<div class='loginBox'>
		 <form method="post" action="book_del1.php" id="form" >
		 	<select name="ids" class='select'>
		 		<?php
		 		   $res=mysqli_query($conn,"SELECT * from book");
                    while($row=mysqli_fetch_assoc($res))
                     {
                     	$id=$row['id'];
                     	echo '<option class="backg" value="'.$id.'">'.$id.'</option>';
                     }
		 		  ?>
		 	</select>
		 		
		 	<input type="number" placeholder="no. of copies" name="copies">
		 	<input type="submit">
		 			 </form>
		 			</div>
	</body>
	<?php
	  if(isset($_SESSION["success"]))
	  	echo '<script>alert("Success!")</script>';
	  unset($_SESSION["success"]);
	  if(isset($_SESSION["zerocop"]))
	  	echo '<script>alert("Copies cannot be less than zero!")</script>';
	  unset($_SESSION["zerocop"]);
	  ?>
	  <p>
	  	<div class='goBack'>
           <a href="book_menu.php">Go Back</a>
       </div>
</html>