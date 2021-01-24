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
//$email = $password = $cmfpassword = "";
// If form submitted, insert values into the database.
if (isset($_REQUEST['email'])){
 
        //escapes special characters in a string 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($link,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($link,$password);
	$cmfpassword = stripslashes($_REQUEST['cmfpassword']);
	$cmfpassword = mysqli_real_escape_string($link,$cmfpassword);
	
	if(strlen(trim($_POST["password"])) < 6){
		echo '<script language="javascript">';
		echo 'alert("Password must have at least 6 characters ! ")';
		echo '</script>';
		die();
	}
	if($password != $cmfpassword){
		echo '<script language="javascript">';
		echo 'alert("Please confirm passoword ! ")';
		echo '</script>';
		die();
	}
	
	
        $query = "INSERT into `user` (email, password) VALUES ('$email', '".md5($password)."')";
        $result = mysqli_query($link,$query);
        header("Location: login.php");
    
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
				<a href="login.php"><h2 class="inactive underlineHover"> Sign In </h2></a>
				<h2 class="active underlineHover">Sign Up </h2>

    

				<!-- Register Form -->
				<form name="registration" action="" method="POST">
					<input type="text" id="login" class="fadeIn second" name="email" placeholder="email" required/>
					<input type="text" id="password" class="fadeIn third" name="password" placeholder="password" required/>
					<input type="text" id="password" class="fadeIn third" name="cmfpassword" placeholder="confirm password" required/>
					<input type="submit" class="fadeIn fourth" value="Register">
				</form>

				<!-- Remind Passowrd -->
				<div id="formFooter">
					<a class="underlineHover" href="login.php">Already have an account? Log in!</a>
				</div>

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