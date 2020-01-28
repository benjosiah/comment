
<?php
include 'header.php'

?>
<body>
	
	
	<script type="text/javascript">
		var d=new Date();
		var monthname=new Array('January','February','March','April','May','June','July','August','September','October','November','December');
		var weekday=new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
					//Ensure correct for language. English is "January 1, 2004"
					
					
		var TODAY = weekday [d.getDay()]+". "+ monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear()+" - "+ d.getHours()+":"+ d.getMinutes()+":"+d.getSeconds() ;
		document.writeln("<form class='time' ><button>"+TODAY+"</button></form>");
     </script>
		<?php

			echo "
				<form method='POST' class='' action='".SignIn($conn)."'>
				<table width='100px' border='1'>
				<tr>
					<td>SIGNIN FORM.</td>
				</tr>
				<tr>
					<td>NAME</td><td> <input name='name' id='name'></td>
				</tr>
				<tr>
					<td>EMAIL</td><td><input name='email' id='email'></td>
				</tr>
				<tr>
					<td><button type='submit' name='Signinsubmit'>SIGNIN</button></td>
				</form>
				<form method='POST' action='".SignOut()."' >
				<button name='SignoutSubmit type='submit'>Sign Out</button>
				</form>

				<br/>
				<br/>
				<br/>";

			if (isset($_SESSION['id'])) {
				echo "you are logged in";
			}
			else{
				echo "you are NOT logged in";
			}
			?>
			
</body>

</html>

