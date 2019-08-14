
<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<meta name="description" content="This is an example of a meta description. This will often show up in the search results.">
<meta name=viewport content = "width=device-width, initial-scale=1">
<title>php login project</title>
<link rel="stylesheet" href="css/main.css">
</head>
<!--###########head#############-->
</head>
<body>

    <header>
        <nav class="nav-header-main">
            <a class="header-logo" href="#">
                <img src="img/logo.png" alt="logo">
            </a>
            <ul class="header-ul">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="header-login">
                <form action="includes/login.inc.php" method="post">
                    <!--#link to login.php file -->
                    <input type="text" name="mailuid" placeholder="username/E-mail...">
                    <input type="password" name="pwd" placeholder="password">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                 <a href="signup.php">Signup</a>
                <form action="includes/logout.inc.php" method="post">
                    <!--#link to login.php file -->
                    <button type="submit" name="logout">Logout</button>
                </form>
            </div>
        </nav>

    </header>