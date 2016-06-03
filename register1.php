<?php 
session_start();
if(isset($_SESSION["user"]) || isset($_SESSION["authuser"]))
{
  header("Location: book_menu.php");
  exit();
}
include 'header.php';
?>
<style type="text/css">
.a{
  text-align: center;
  margin-bottom: 20px;
  margin-right: 20px;
}
body{
  background-size: cover;
}
</style>
<head>
	<h2><div class="a">Register with us now!</div></h2>
</head>
<body>
  <div class='cover'></div>
    <form method="post" action="register.php">
      <div class="a">
           Name:
           <input type="text" name="name"><br>
         </div>
         <div class="a">
           Email:
           <input type="text" name="email"><br>
         </div><div class="a">
           Password:
           <input type="password" name="password"><br>
         </div><div class="a">
           <input type="submit"><br>
         </div>
    </form>
    <?php
    if(isset($_SESSION["emptyfields"]))
      echo '<script>alert("Empty Fields")</script>';
    if(isset($_SESSION["emailtaken"]))
      echo '<script>alert("Account already exists")</script>';
    unset($_SESSION["emailtaken"]);
    unset($_SESSION["emptyfields"]);
    ?>
</body>
</html>