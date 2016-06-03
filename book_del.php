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
#form {

	font-size: inherit;
	text-align: center;


}

.book{
text-align: center;
width: 5%;
height: 25px;

}
#select-id{
display: block;



}
 </style>
	<head>
		<h3 style="text-align:center"> Delete a book!</h3>
	</head>
	<body>
		<div class='cover'></div>
		 <form method="post" action="book_del1.php" id="form" >
		 	<div id ="select-id">
		 	Book ID:
		 	<select name="ids" class ="book">
		 		<?php
		 		   $res=mysqli_query($conn,"SELECT * from book");
                    while($row=mysqli_fetch_assoc($res))
                     {
                     	$id=$row['id'];
                     	echo '<option value="'.$id.'">'.$id.'</option>';
                     }
		 		  ?>
		 	</select>
		 		</div>
		 	<br>
		 	<div>
		 	No. of copies:
		 	<input type="number" name="copies" style="display: inline">
		 	<input type="submit" style="display: inline">
		 	</div>
		 			 </form>
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
	  	<div id='form'>
           <a href="book_menu.php">Go Back</a>
       </div>
</html>