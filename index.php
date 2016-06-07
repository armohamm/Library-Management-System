<?php
session_start();
if(isset($_SESSION["user"]) || isset($_SESSION["authuser"]))
{
	header("Location: logout.php");
}
?>
<style>
.loginBox{
    position: relative;
    width: 30%;
    padding: 140px 10px 10px 140px;
    z-index: 2;
    font-family: 'Exo', sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #fff;
    margin: 0 auto;
}

.loginBox input[type=text]{
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
.loginBox input[type=password]{
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
	margin-top: 10px;
}

.loginBox input[type=submit]{
	width: 330px;
	height: 45px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.loginBox > a {
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	text-decoration: none;
	margin-top: 10px;
}

.loginBox > a:hover{
	opacity: 0.8;
}

.loginBox input[type=submit]:hover{
	opacity: 0.8;
}

.loginBox input[type=submit]:active{
	opacity: 0.6;
}

.loginBox input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.loginBox input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.loginBox input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.8);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.8);
}
.grid-container{
	padding-top: 150px;
	text-align: center;
	font-family: 'Raleway';
	font-size: 32px;
	background-color: #ffffff;
}
.grid{
       width: 100%;
}
.col{
	display: inline-block;
	padding: 60px;
}
.wrapper{
	padding-bottom: 250px;
}
hr{
	margin:10;
	width: 15%;
	display: inline-block;
}
.icon{
	padding-top: 20px;
}
</style>
<head></head>
<body>
	<div class='wrapper'>
		<div class='cover'></div>
		<?php include 'header.php';?>
	<div class="loginBox">
     <p></p>
	<form action = "welcome.php" method="post" >
		<input type="text" placeholder="username" name="username">
		<input type="password" placeholder="password" name="password"><br>
		<input type="submit" name="submit" value="Login">
	</form>
	<p></p>
	</div>
</div>
	<div class="grid-container">
		<strong>Welcome to the Library</strong>
		<div class='icon'>
			<hr>
			<i class="fa fa-book" style="font-size:28px"></i>
			<hr>
		</div>
		<p>
			See Our Best Rated Books
		</P>
			<div class="grid">
		<div class="col">
              <img src="download.jpg">

		</div>
		<div class="col">
              <img src="d2.jpg">
		</div>
		<div class="col">
              <img src="d3.jpg">
		</div>
		<div class="col">
              <img src="d4.jpg">
		</div>
	</div>
	</div>
</body>
<?php
if(isset($_SESSION["check"]))
echo '<script>alert("Incorrect Username or Password")</script>';
unset($_SESSION["check"]);
if(isset($_SESSION["notlogged"]))
echo '<script>alert("Error Encountered: You are not logged in")</script>';
unset($_SESSION["notlogged"]);
?>
</html>
