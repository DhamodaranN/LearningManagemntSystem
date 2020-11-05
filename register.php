<?php 
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}
require_once "config.php";
require_once "collegedata.php";

$target_dir = "images/";
$target_file = '';
$uploadOk = 1;
$imageFileType = '';

$fullname=$username=$email = $password = $confirm_password = "";
$email_err =$username_err = $password_err=$pic_err=$uploadOk = $confirm_password_err = ""; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  
      
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{ 
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){ 
            mysqli_stmt_bind_param($stmt, "s", $param_username);
             
            $param_username = trim($_POST["username"]);
             
            if(mysqli_stmt_execute($stmt)){ 
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                    $fullname = trim($_POST["fullname"]);
                    //image upload 
                    $target_dir = "images/";
                    $target_file = $target_dir . $username;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                      echo "File is an image - " . $check["mime"] . ".";
                      $uploadOk = 1;
                    } else {
                        $pic_err = "File is not an image.";
                      $uploadOk = 0;
                    }
                    if (file_exists($target_file)) {
                        $pic_err = "Sorry, file already exists.";
                        $uploadOk = 0;
                      }
                      
                      // Check file size
                      if ($_FILES["fileToUpload"]["size"] > 500000) {
                        $pic_err = "Sorry, your file is too large.";
                        $uploadOk = 0;
                      }
                      
                      // Allow certain file formats
                      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
                     $pic_err = "Sorry, only JPG, JPEG, PNG files are allowed.";
                        $uploadOk = 0;
                      } 
                      if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded."; 
                      } else {
                        $img = resize_image($_FILES["fileToUpload"]["tmp_name"], 200, 200);
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                          echo "Sorry, there was an error uploading your file.";
                        }
                      }
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
 
            mysqli_stmt_close($stmt);
        }
    }
      
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{ 
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){ 
            mysqli_stmt_bind_param($stmt, "s", $param_email);
             
            $param_email = trim($_POST["email"]);
             
            if(mysqli_stmt_execute($stmt)){ 
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already registered.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
 
            mysqli_stmt_close($stmt);
        }
    }
     
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    } 
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
     
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){ 
        $sql = "INSERT INTO users (fullname,username,email,password,role) VALUES (?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){ 
            mysqli_stmt_bind_param($stmt, "sssss", $param_fullname,$param_username,$param_email,$param_password, $role);
             $param_fullname=$fullname;
             $param_email=$email;
             $param_role='Staff';

            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);  
             
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
					<a class="nav-link" href="#">Home</a>
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
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group ">
                <label>Full name</label>
                <input type="text" name="fullname" class="form-control" value="<?php echo $fullname; ?>">
                <span class="help-block"> </span>
            </div>    
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group  <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="mail" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?> </span>
            </div>      
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($pic_err)) ? 'has-error' : ''; ?>">
                <label>Profile Image</label>
                <div class="custom-file mb-3">
  <input type="file" name="fileToUpload" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">Select an Image</label>
</div>
                <span class="help-block"><?php echo $pic_err; ?></span>
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
   <script> 
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>