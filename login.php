<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'databfse');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($link,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($link,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($link,$query) or die(mysqli_connect_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.html
	    header("Location: dashboard.html");
		die();
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}	

}
?>

<!DOCTYPE HTML>


<html>
	<head>
		<title>www.SYSTEM4STUDENTS.ro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/login.css" />
				<!-- BOOTSTRAP : -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	</head>
	<body class="login">
		<!--Nav -->
		    <div class="topnav">
				<a href="index.html">Home</a>
				<a href="dashboard.html">Dashboard</a>
				<a class="active" href="login.php">Log in</a>
				<a href="event-calendar/index.html">Activities</a>
				<a href="javascript-finished/index.html">To Do List</a>
			</div>

		<!-- Header -->
			
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">Management System for Students</a></div>
			</header>


			
			<div class="wrapper fadeInDown">
				<div id="formContent">
				<!-- Tabs Titles -->
				<h2 class="active"> Sign In </h2>
				<a href="signup.php" ><h2 class="inactive underlineHover">Sign Up </h2></a>

    

				<!-- Login Form -->
				<form action="" name="login"  method="POST">
					<input type="text" id="login" class="fadeIn second" name="username" placeholder="login email" required/>
					<input type="text" id="password" class="fadeIn third" name="password" placeholder="password" required/>
					<input type="submit" class="fadeIn fourth" value="Login">
				</form>

				

				</div>
			</div>

    <!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					&copy; TEAM OF MANAGERS
				</div>
			</footer>

    <!-- Scripts -->
			
	

	</body>
</html>