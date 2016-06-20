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
	background-color: #F57C00;
	display: inline-block;
	width: 245px; 
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
	background-color: #fff;
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
    color: #F57C00;
    }
.nav-elements > a:hover{
    display: inline-block;
    text-decoration: none;
    padding: 0 12px;
    line-height: 59px;
    text-align: center;
    min-width: 60px;
    cursor: pointer;
    background-color: #F57C00;
    color: #fff;
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
	position: absolute;top: 0; left: 0;width: 100%;height: 687px;
	z-index: -1;
	-webkit-filter:blur(7px);
	filter:blur(7px);
}
.top-strip{
	display: inline-block;
	text-decoration: none;
	text-align: right;
	background-color: #F57C00;
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

#menu {
  display:none;
}

#mob-menu{
	display: none;
}
@media(min-width: 300px) and (max-width: 1300px){
	/* #menu is the original menu */
	.top-strip{
		display: none;
	}
	.right-header{
		width: 28%;
	}
	.navigation {
		display:none;
	}
	
	#mob-menu {
		display:block;
	}
}
.cssload-thecube {
	width: 73px;
	height: 73px;
	margin: 0 auto;
	margin-top: 49px;
	position: relative;
	transform: rotateZ(45deg);
		-o-transform: rotateZ(45deg);
		-ms-transform: rotateZ(45deg);
		-webkit-transform: rotateZ(45deg);
		-moz-transform: rotateZ(45deg);
}
.cssload-thecube .cssload-cube {
	position: relative;
	transform: rotateZ(45deg);
		-o-transform: rotateZ(45deg);
		-ms-transform: rotateZ(45deg);
		-webkit-transform: rotateZ(45deg);
		-moz-transform: rotateZ(45deg);
}
.cssload-thecube .cssload-cube {
	float: left;
	width: 50%;
	height: 50%;
	position: relative;
	transform: scale(1.1);
		-o-transform: scale(1.1);
		-ms-transform: scale(1.1);
		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
}
.cssload-thecube .cssload-cube:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgb(43,160,199);
	animation: cssload-fold-thecube 2.76s infinite linear both;
		-o-animation: cssload-fold-thecube 2.76s infinite linear both;
		-ms-animation: cssload-fold-thecube 2.76s infinite linear both;
		-webkit-animation: cssload-fold-thecube 2.76s infinite linear both;
		-moz-animation: cssload-fold-thecube 2.76s infinite linear both;
	transform-origin: 100% 100%;
		-o-transform-origin: 100% 100%;
		-ms-transform-origin: 100% 100%;
		-webkit-transform-origin: 100% 100%;
		-moz-transform-origin: 100% 100%;
}
.cssload-thecube .cssload-c2 {
	transform: scale(1.1) rotateZ(90deg);
		-o-transform: scale(1.1) rotateZ(90deg);
		-ms-transform: scale(1.1) rotateZ(90deg);
		-webkit-transform: scale(1.1) rotateZ(90deg);
		-moz-transform: scale(1.1) rotateZ(90deg);
}
.cssload-thecube .cssload-c3 {
	transform: scale(1.1) rotateZ(180deg);
		-o-transform: scale(1.1) rotateZ(180deg);
		-ms-transform: scale(1.1) rotateZ(180deg);
		-webkit-transform: scale(1.1) rotateZ(180deg);
		-moz-transform: scale(1.1) rotateZ(180deg);
}
.cssload-thecube .cssload-c4 {
	transform: scale(1.1) rotateZ(270deg);
		-o-transform: scale(1.1) rotateZ(270deg);
		-ms-transform: scale(1.1) rotateZ(270deg);
		-webkit-transform: scale(1.1) rotateZ(270deg);
		-moz-transform: scale(1.1) rotateZ(270deg);
}
.cssload-thecube .cssload-c2:before {
	animation-delay: 0.35s;
		-o-animation-delay: 0.35s;
		-ms-animation-delay: 0.35s;
		-webkit-animation-delay: 0.35s;
		-moz-animation-delay: 0.35s;
}
.cssload-thecube .cssload-c3:before {
	animation-delay: 0.69s;
		-o-animation-delay: 0.69s;
		-ms-animation-delay: 0.69s;
		-webkit-animation-delay: 0.69s;
		-moz-animation-delay: 0.69s;
}
.cssload-thecube .cssload-c4:before {
	animation-delay: 1.04s;
		-o-animation-delay: 1.04s;
		-ms-animation-delay: 1.04s;
		-webkit-animation-delay: 1.04s;
		-moz-animation-delay: 1.04s;
}



@keyframes cssload-fold-thecube {
	0%, 10% {
		transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}

@-o-keyframes cssload-fold-thecube {
	0%, 10% {
		-o-transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		-o-transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		-o-transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}

@-ms-keyframes cssload-fold-thecube {
	0%, 10% {
		-ms-transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		-ms-transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		-ms-transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}

@-webkit-keyframes cssload-fold-thecube {
	0%, 10% {
		-webkit-transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		-webkit-transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		-webkit-transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}

@-moz-keyframes cssload-fold-thecube {
	0%, 10% {
		-moz-transform: perspective(136px) rotateX(-180deg);
		opacity: 0;
	}
	25%,
				75% {
		-moz-transform: perspective(136px) rotateX(0deg);
		opacity: 1;
	}
	90%,
				100% {
		-moz-transform: perspective(136px) rotateY(180deg);
		opacity: 0;
	}
}
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
		<a href="#" style="text-decoration:none"> devansh@thelibrary.esy.es</a>
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
			<a href="logout.php" style="height:100%;">Logout</a>
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
	<div id='mob-menu'>
		<ul id="menu">
			<?php 
			if(isset($_SESSION["authuser"]) || isset($_SESSION["user"]))
				echo '<li><a href="logout.php">Logout</a></li>';
			else if($_SERVER['PHP_SELF']!="/library/register1.php")
				echo '<li><a href="register1.php">Register</a></li>';
			else
				echo '<li><a href="index.php">Home</a></li>';
			?>
			<li><a href="about.php">About Us</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="index.php">Our Books</a></li>
			<li><a href="index.php">Authors</a></li>
	    </ul>
	</div>
	<link rel="stylesheet" href="slicknav.css" />
	<script src="jquery.min.js"></script>
   <script src="jquery.slicknav.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#menu').slicknav({prependTo:'#mob-menu'});
	});
	/*$(document).ready(function(){
			$(document).on('scroll', function(){
				if($(this).scrollTop()>15)	
				$("header").css({"position":"fixed","width":"70%","margin-left":"150px","z-index":"20","transition-duration":"0.4s"});
			     else
			     	$("header").css({"position":"","width":"100%","margin-left":"0","z-index":"3"});
			});
		});*/
      $(document).ajaxStart(function()
      	{    $(".cssload-thecube").show();});
      $(document).ajaxStop(function()
      	{     $(".cssload-thecube").hide();})
	</script>
</div>
</div>
	</header>