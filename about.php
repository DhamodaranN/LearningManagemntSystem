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
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
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
			<h1>About Learning Management System!</h1>
			<br>
			<p>This Application is made to assist College Students. We provide three roles as Student,
			 Professor and Admin. Students will be added automatically by the Admin when creating class. <br>Also, Admin create a New Subject and a Professor will be allocated. Admins
			 also monitor the students and Professors by their activities. Professor take Classes,
			<br> and share their notes, ask questions, post events, Assignments, Study materials also
			 can view student’s activities. Students Can download notes, study materials, also can
			<br> complete Assignments as Quiz or File Submission. Students can Participate in events to
			 get additional point with help to secure top places in leader board. Also, they can 
			<br>trace their activities and able to bookmark any post that published by professor to My
			 Bookmarks for future Study.</p>
			
			<br><button onclick="window.location.href='register.php'" class="btn btn-outline-secondary btn-lg">Register Now</button>
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