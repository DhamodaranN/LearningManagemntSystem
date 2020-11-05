<html>
    <head>
        <title>Assignment</title>
        <link rel="stylesheet" href="/css/main.css">
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
        
            <div class="container">
                <div class="box">
                    <input class="post" type="text" placeholder="Enter the comment to post">
                </div>

                <div class="action">
                    <form action="/action_page.php">
                        <input type="file" id="myFile" name="filename">
                        <input type="submit">
                      </form>
                </div>
                
            </div>
        </body>
</html>