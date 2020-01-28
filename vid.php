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

		<div align="center" class="vid-con">
			<video width="60%" height="300px" controls >
				<source src="Common,_John_Legend_-_Glory.mp4" type="video/mp4">
				Your browser does ot support this file type
			</video>
		</div><br>
		<center><script type="text/javascript">
		var d=new Date();
		var monthname=new Array('January','February','March','April','May','June','July','August','September','October','November','December');
		var weekday=new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
		//Ensure correct for language. English is "January 1, 2004"
		
		
		var TODAY = weekday [d.getDay()]+". "+ monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear()+" - "+ d.getHours()+":"+ d.getMinutes()+":"+d.getSeconds() ;
		document.writeln("<form class='time' ><button>"+TODAY+"</button></form>");
        </script></center>
		<?php
			echo "<div class='form_con'>";
				echo "<form method='POST' action='".setcomment($conn)."'>
					<input type='hidden' name='name' value='ananymous'>
					<input type='hidden' name='date' value=" .date('Y-m-d H:i:s'). ">
					<textarea  name='coment' >
					</textarea></br>
					<button type='submit' name='submit'>Comment</button>
					</form>";
			echo "</div>";



				view($conn);
			?>
			
	</div>
	
</body>

</html>

