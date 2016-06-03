<?php
session_start();
if(isset($_SESSION["user"]) || isset($_SESSION["authuser"]))
{
	header("Location: logout.php");
}
include 'header.php';
?>
<style>
.a1{
	text-align: center;
	margin-right: 40px;
}
.a{
	text-align: center;
}
.cover{
	background-image: url("background.jpg");
	background-size: cover;
	position: absolute;top: 0; left: 0;width: 100%;height: 100%;
	z-index: -1;
	-webkit-filter:opacity(0.4);
}
.loginBox{
}
</style>
<head><div class="a"><h3>Login Page</h3></div></head>
<br>
<body>
	<div class='cover'></div>
	<div class="loginBox">
	<form action = "welcome.php" method="post" >
		<div class="a1">
		Enter your username:
		<input type="text" name="username">
	</div>
		<br>
		<div class="a">
		Enter Password:
		<input type="password" name="password">*
	</div>
		<br>
		<div class="a">
		<input type="submit" name="submit">
	</div>
	</form>
</div>
<p> <div class="a">
	<a href="register1.php">Not an Existing User? Register Now! </a>
</div>
</p>
</body>
<div class="a">
<footer> &copy Copyrights Reserved 2016 </footer>
</div>
<?php
if(isset($_SESSION["check"]))
echo '<script>alert("Incorrect Username or Password")</script>';
unset($_SESSION["check"]);
if(isset($_SESSION["notlogged"]))
echo '<script>alert("Error Encountered: You are not logged in")</script>';
unset($_SESSION["notlogged"]);
?>
</html>
