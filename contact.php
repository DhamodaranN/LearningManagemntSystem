<?php

require_once "collegedata.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Contact Us</title>
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
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
		</div>
	</nav>


	<br>
			<br>
	<div class="container features">
		<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">	
				<h3 class="feature-title">Get in Touch!</h3>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Name" name="">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Email Address" name="email">
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="4"></textarea>
				</div>
				<input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
			</div>
		</div> 
	</div>
	
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