<!doctype html>
<html>
<head>
	<title>Tiny Blog - Simple Blogging Framework</title>
	<link rel="stylesheet" href="../css/main.css" />
</head>
<body>
<div class="container">
<header>
	<h1>tiny blog</h1>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="documentation.php">Documentation</a></li>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
	<div class="user-bar">
		<form method="post" action="login.php">
			<input type="text" placeholder="User" />
			<input type="password" placeholder="Pass" />
			<input type="submit" value="Login" />
		</form>
	</div>
</header>
