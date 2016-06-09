<?php
session_start();
?>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<title>Library Management System</title>
<style type="text/css">
.container{
	margin-right: auto;
    margin-left: auto;
    width: 100%;
    margin-top: -8px;
    height: 100px;
}
.logo-container{
	background-color: #ffa100;
	display: inline-block;
}
.logo{
	padding-bottom: 20px;
    padding-top: 20px;
    padding-left: 9px;
    width: 15%;
}
.navigation{
	text-align: right;
	width: 100%;
	background-color: #ffffff;
	height: 59px;
}
.nav-elements{
    font-size:  15px;
    display: inline-block;
    text-transform: uppercase;
    font-family: 'Roboto',sans-serif;
}
.nav-elements > a {
	-webkit-transition-duration:0.8s;
transition-duration:0.8s;
    display: inline-block;
    text-decoration: none;
    padding: 0 16px;
    line-height: 59px;
    text-align: center;
    min-width: 60px;
    cursor: pointer;
    color: #ffa100
    }
.nav-elements > a:hover{
    display: inline-block;
    text-decoration: none;
    padding: 0 12px;
    line-height: 59px;
    text-align: center;
    min-width: 60px;
    cursor: pointer;
    background-color: #ffa100;
    color: #ffffff;
    }
.right-header{
	height: 94px;
	width:80%;
    display: inline-block;
    position: absolute;
}
.cover{
	background-image: url("background.jpg");
	background-size: cover;
	position: absolute;top: 0; left: 0;width: 100%;height: 100%;
	z-index: -1;
	-webkit-filter:blur(7px);
	filter:blur(7px);
}
.top-strip{
	display: inline-block;
	text-decoration: none;
	text-align: right;
	background-color: #ffa100;
    width: 100%;
    height: 35px;
}
.top-strip a{
-webkit-transition-duration:0.4s;
transition-duration:0.4s;
color: #fff;
}
.top-strip a:hover{
color: #fff;
background-color: black;
}
.icons{
	display: inline-block;
}
.icons a{
	line-height: 35px;
	padding: 12px;
	display: inline-block;
}
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
</style>
<header>
	<div class="container">
	<div class="logo-container">
		<div class="logo">
			<img src="logo-2.png">
		</div>
	</div>
	<div class="right-header">
	<div class="top-strip">
    <div class="icons">
  <a href="https://www.facebook.com">
<i class="fa fa-facebook"></i></a>
</div>
<div class="icons">
<a href="https://www.linkedin.com">
<i class="fa fa-linkedin" ></i></a>
</div>
<div class="icons">
<a href="https://www.twitter.com">
<i class="fa fa-twitter" ></i></a>
</div>
<div class="icons">
	<a href="https://www.plus.google.com">
<i class="fa fa-google-plus"></i></a>
</div>
	</div>
	<div class="navigation">
		<?php
		if(isset($_SESSION["authuser"]) || isset($_SESSION["user"]))
			echo '<div class="contact nav-elements">
			<a href="logout.php" style="width:100%;height:100%;">Logout</a>
		</div>';
		else if($_SERVER['PHP_SELF']!="/library/register1.php")
			echo '<div class="contact nav-elements">
			<a href="register1.php" style="height:100%;">Register</a>
		</div>';
		else
			echo '<div class="contact nav-elements">
			<a href="index.php" style="height:100%;">Home</a>
		</div>';
		?>
		<div class="about nav-elements">
			<a href="about.php" style="height:100%;">About</a>
		</div>
		<div class="contact nav-elements">
			<a href="contact.php" style="height:100%;">contact</a>
		</div>
		<div class="contact nav-elements">
			<a href="index.php" style="height:100%;">Our Books</a>
		</div>
		<div class="contact nav-elements">
			<a href="index.php" style="height:100%;">Authors</a>
		</div>
	</div>
</div>
</div>
	</header>