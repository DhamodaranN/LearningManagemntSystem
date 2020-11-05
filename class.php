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
}		                body{margin-top:20px; background-color: #eeeeee;}

.well-social-post {
    border-radius: 0;
    background-color: #ffffff;
    border: 1px solid #ddd;
    padding:0;
}

.well-social-post .glyphicon,
.well-social-post .fa,
.well-social-post [class^='icon-'],
.well-social-post [class*='icon-'] {
    font-weight: bold;
    color: #999999;
}

.well-social-post a,
.well-social-post a:hover,
.well-social-post a:active,
.well-social-post a:focus {
    text-decoration: none;
}

.well-social-post .list-inline {
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
}

.well-social-post .list-inline li {
    position: relative;
}

.well-social-post .list-inline li.active::after {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    content: "";
    top: 30px;
    left: 50%;
    left: -webkit-calc(50% - 5px);
    left: -moz-calc(50%-5px);
    left: calc(50% - 5px);
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #dddddd;
}

.well-social-post .list-inline li.active a {
    color: #222222;
    font-weight: bold;
}

.well-social-post .form-control {
    width: 100%;
    min-height: 100px;
    border: none;
    border-radius: 0;
    box-shadow: none;
}

.well-social-post .list-inline {
    padding: 10px;
}

.well-social-post .list-inline li + li {
    margin-left: 10px;
}

.well-social-post .post-actions {
    margin: 0;
    background-color: #f6f7f8;
    border-top-color: #e9eaed;
}                                                            </style>
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
  
    <div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-md-offset-3 col-md-6 col-xs-12">
            <div class="well well-sm well-social-post">
        <form>
            <ul class="list-inline" id='list_PostActions'>
                <li class='active'><a href='#'></a></li>
                <li><a href='#'>Add photos/Video</a></li> 
            </ul>
            <textarea class="form-control" placeholder="Ask Questions"></textarea>
            <ul class='list-inline post-actions'>
                <li><a href="#"><span class="glyphicon glyphicon-camera"></span></a></li>
                <li><a href="#" class='glyphicon glyphicon-user'></a></li>
                <li><a href="#" class='glyphicon glyphicon-map-marker'></a></li>
                <li class='pull-right'><a href="#" class='btn btn-primary btn-xs'>Post</a></li>
            </ul>
        </form>
            </div>
        </div>
    </div>
</div>     
    
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
<script>
$(function(){
    var postActions   = $( '#list_PostActions' );
    var currentAction = $( '#list_PostActions li.active' );
    if ( currentAction.length === 0 ) {
        postActions.find( 'li:first' ).addClass( 'active' );
    }
    postActions.find( 'li' ).on( 'click', function( e ) {
        e.preventDefault();
        var self = $( this );
        if ( self === currentAction ) {return;}
        // else
        currentAction.removeClass( 'active' );
        self.addClass( 'active' );
        currentAction = self;
    });
});</script>
</body>
</html>