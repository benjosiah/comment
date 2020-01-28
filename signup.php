<?php
include 'header.php';
			echo "
				<form method='POST' class='' action='".SignUp($conn)."'>
				<table width='100px' border='1'>
				<td>SIGNUP FORM.</td>				
				<tr>
					<td>NAME</td><td> <input name='name' id='name'></td>
				</tr>
				<tr>
					<td>EMAIL</td><td><input name='email' id='email'></td>
				</tr>
				<tr>
					<td><button type='submit' name='Signupsubmit'>SIGNUP</button></td>
				</form>";
		?>
