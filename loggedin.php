
<?php
session_start();
if (!isset($_SESSION['loggedin'])||$_SESSION['loggedin']==false)
{
     header('Location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<nav>
		<div class='main-wrapper'>
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
			</ul>
			

		</div>
	</nav>
</header>
   <section><h3>You are logged in</h3></section>>