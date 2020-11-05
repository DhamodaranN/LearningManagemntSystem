<?php 
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}
require_once "config.php";
require_once "collegedata.php";
  
$classname = $Subject = $Section=$Index = "";
$classname_err = $Subject_err = $confirm_Subject_err = ""; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    if(empty(trim($_POST["classname"]))){
        $classname_err = "Please enter a classname.";
    } else{ 
        $sql = "SELECT id FROM users WHERE classname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){ 
            mysqli_stmt_bind_param($stmt, "s", $param_classname);
             
            $param_classname = trim($_POST["classname"]);
             
            if(mysqli_stmt_execute($stmt)){ 
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $classname_err = "This classname is already taken.";
                } else{
                    $classname = trim($_POST["classname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
 
            mysqli_stmt_close($stmt);
        }
    }
     
     
    if(empty($classname_err) && empty($Subject_err)){ 
        $sql = "INSERT INTO classes (classname, Subject,Section,Index) VALUES (?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){ 
            mysqli_stmt_bind_param($stmt, "ssss", $param_classname, $param_Subject,$param_Index, $param_Index);
             
            $param_classname = $classname;
            $param_Subject = $Subject;  
            $param_Section = $_POST["Section"];
            $param_Index = $_POST["Index"];  
             
            if(mysqli_stmt_execute($stmt)){ 
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
 
            mysqli_stmt_close($stmt);
        }
    }
     
    mysqli_close($link);
}
?>
 
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
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
    <div class="wrapper">
        <h2>Add a New Class</h2>
        <p>Please fill this form to create a Class.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($classname_err)) ? 'has-error' : ''; ?>">
                <label>Class Name</label>
                <input type="text" name="classname" class="form-control" value="<?php echo $classname; ?>">
                <span class="help-block"><?php echo $classname_err; ?></span>
            </div>      
            <div class="form-group <?php echo (!empty($Subject_err)) ? 'has-error' : ''; ?>">
                <label>Subject</label>
                <input type="Subject" name="Subject" class="form-control" value="<?php echo $Subject; ?>">
                <span class="help-block"><?php echo $Subject_err; ?></span>
            </div>      
            <div class="form-group ">
                <label>Section</label>
                <input type="Section" name="Section" class="form-control" value="<?php echo $Section; ?>">
                <span class="help-block"><?php echo $Section_err; ?></span>
            </div>      
            <div class="form-group <?php echo (!empty($Index_err)) ? 'has-error' : ''; ?>">
                <label>Index</label>
                <input type="Index" name="Index" class="form-control" value="<?php echo $Index; ?>">
                <span class="help-block"><?php echo $Index_err; ?></span>
            </div>
           
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
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