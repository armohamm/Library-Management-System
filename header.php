<html>
<title>Library Management System</title>
<h1 style="text-align: center">Library Management System</h1>
<div id="head">
	<hr>
	<a href="about.php">About</a> | <a href="contact.php">Contact Us</a> <?php 
	if(!($_SERVER['PHP_SELF']=="/library/index.php") && ( isset($_SESSION["user"]) || isset($_SESSION["authuser"])))
	echo '<a href="logout.php">| Logout</a>';
	elseif(!($_SERVER['PHP_SELF']=="/library/index.php"))
	echo '<a href="index.php">| Login </a>';
	?>
	<hr>
		</div>
<style type="text/css">
.cover{
	background-image: url("background.jpg");
	background-size: cover;
	position: absolute;top: 0; left: 0;width: 100%;height: 100%;
	z-index: -1;
	-webkit-filter:opacity(0.4);
}
#head{
	text-align: center;
	margin-right: 450px;
	margin-left: 450px;
}
#head:hover{
	background-color: rgba(255,255,255,.7);
}
</style>
