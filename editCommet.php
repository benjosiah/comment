<?php
date_default_timezone_set('Europe/Copenhagen');
include'connect.php';
include'set.php';

?>
<html>
<head>
<title>indexs</title> 
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="ppp">   

		<?php

			$id= $_POST['id'];
			$name= $_POST['name'];
			$date= $_POST['date'];
			$coment= $_POST['coment'];

			echo "<div class='form_con' align='left'>";
				echo "<form method='POST' action='".editcomment($conn)."'>
					<input type='hidden' name='id' value='".$id."'>
					<input type='hidden' name='name' value='".$name."'>
					<input type='hidden' name='date' value=" .$date. ">
					<textarea  name='coment'>".$coment."</textarea></br>
					<button type='submit' name='submit'>Edit</button>
					</form>";
			echo "</div>";
			?>
	</div>
	
</body>

</html>

