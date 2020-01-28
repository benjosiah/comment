<?php


include 'header.php'

?>

<body>
	<div class="ppp"> 
	
		
				<script type="text/javascript">
					var d=new Date();
					var monthname=new Array('January','February','March','April','May','June','July','August','September','October','November','December');
					var weekday=new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
					//Ensure correct for language. English is "January 1, 2004"
					
					
					var TODAY = weekday [d.getDay()]+". "+ monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear()+" - "+ d.getHours()+":"+ d.getMinutes()+":"+d.getSeconds() ;
					document.writeln("<form class='time' ><button>"+TODAY+"</button></form>");
        		</script>


        <?php
        	if (isset($_SESSION['id'])) {
        		echo "<form method='POST' action='".upload($conn)."'>
        			<input type='hidden' name='name' value='".$_SESSION['name']."'>
        			<input  name='vid' id='vid' >
        			<input type='file' name='upload' id='upload'>
        			<button name='UploadSubmit' type='submit'>upload</button>
      			</form>";

        	}
        ?>
	
	</div>
	<br><br>
	<?php/
		include 'footer.html'
	?>
</body>

</html>