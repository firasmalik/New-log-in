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
			<div class="nav-login">
				<form method="POST" action='function1.php'>
					          

				<input type="text" name="uid" placeholder="Username/email">
				<input type="password" name="pwd" placeholder="password">
				<button type='submit'>Login</button>

				</form>
				<a href="signup.php">Sign up</a>
			</div>
		</div>
	</nav>
</header>