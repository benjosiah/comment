<?php
session_start();
date_default_timezone_set('Europe/Copenhagen');
include'connect.php';
include'set.php';


?>
<html>
<head>
<title>indexs</title> 
</head>
<link rel="stylesheet" type="text/css" href="style.css">

<header>
	<nav>
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><?php
			if (isset($_SESSION['id'])) {
				echo "
				<form method='POST' action='".SignOut()."' >
					<button name='SignoutSubmit' type='submit'>Sign Out</button>
				</form>";
			}
			else{
				echo "<form method='POST' class='' action='".SignIn($conn)."'>
						
						<input type='password' name='email' id='email' placeholder='password' >
						<input name='name' id='name' placeholder='username'>
						<button type='submit' name='Signinsubmit' id='Signinsubmit'>SIGNIN</button>
					
					</form>";
			}
			?></li>
			<li><a href="signup.php">SING UP</a></li>
		</ul>
	</nav>
</header>