<?php 
include "connect.php";
session_start();
if(!isset($_SESSION["Email"])){
	$something = $_SESSION['Email'];
 }
if(!isset($_SESSION["Username"])){
  header("homepage.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Custom Website</title>
	<link rel="stylesheet" href="CSS/homepage.css">
</head>
<body>

	<div class="wrapper">
		<video autoplay loop>
			<source src="GRAPHICS/home.mp4" type="video/mp4">
			</video>
			<nav class="navbar">
				<img class="logo" src="GRAPHICS/home.png">
				<ul>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="admin_page.php">Warranty List</a></li>
					<li><a href="login.php">Logout</a></li>
				</ul>
			</nav>
			<div class="center">
			<h1>Welcome To Warrantisado</h1>
			<h2>Have any Warranties?</h2>
			<div class="buttons">
			<button onclick="window.location.href='admin_page.php';">Add Here</button>
		</div>
		</div>
</body>
</html>