<?php

require_once "collegedata.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Learning Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

  </head>
<body>
	<nav class="navbar navbar-expand-md">
		<a class="navbar-brand" href="index.php">Learning Management System</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main-navigation">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	<header class="page-header header container-fluid" style="height: 397px;">
		<div class="overlay"></div>
		<div class="description">
			<br>
			<br>
			<h1>Welcome to the Learning Management System!</h1>
			<br>
			<p>Dear Students,<br>Welcome to the LMS Project, This initiative started by Rookie Coders for Code-A-Thon. conducted by VVCE</p>
			
			<br><button onclick="window.location.href='login.php'" class="btn btn-outline-secondary btn-lg">Login!</button>
		</div>
	</header>
	<footer class="page-footer">
		
		<div class="footer-copyright text-center" style="
    position: fixed;
    bottom: 0;
    width: 100%;
">© 2020 Copyright: Rookie Coders</div>
	</footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
 
</body>
</html>