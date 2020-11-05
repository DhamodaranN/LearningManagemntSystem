<?php
session_start();
  
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
   
}else{
    header("location: login.php");
    exit;
}
require_once "collegedata.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Dashboard - LMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 25%;
  
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
  </head>
<body>
<div class="navbar navbar-expand-md">
		<a class="navbar-brand" href="index.php">Learning Management System</a>	 
		<div class="nav-item dropdown open" style="/* padding-left: 15px; */right: 0;position: fixed;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="" style="
    height: 21px;
"><?php echo $_SESSION["fullname"];?>                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-90px, 20px, 0px);">
                    <a class="dropdown-item" href="profile.php"> Profile</a>
                      <a class="dropdown-item" href="javascript:;">Settings
                      </a>
                  <a class="dropdown-item" href="report.php">Help</a>
                    <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </div>
	</div>
  
  <Span><div class="card"id="samplecard" style="display:block"> 
    <div  class="card-body">
      <h4 class="card-title">Python CSE III Year </h4>
      <p class="card-text">Python Programming</p>
      <a href="class.php?code=AS56T9" class="btn btn-primary">See Subject</a>
    </div>
     </div>
  
  <div class="card" style=""> 
    <div class="card-body">
      <h4 class="card-title">Add Class </h4>
      <p class="card-text">To create a New One Click Below</p>
      <a href="addclass.php" class="btn btn-primary">Create a Class</a>
    </div>
     </div> </span>
    
  <br>
	
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