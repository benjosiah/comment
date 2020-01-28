
<?php
include 'header.php'

?>

<body>
	<div class="ppp"> 
	
		<div class="vid-con">

			<center><video width="60%" height="300px"  controls  >
				<source src="Common,_John_Legend_-_Glory.mp4" type="video/mp4">
					Your browser does ot support this file type
			</video></center><br>

			<a href="Common,_John_Legend_-_Glory.mp4" download="Common,_John_Legend_-_Glory.mp4">downnload</a>
		</div><br>
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
				echo "<div class='form_con'>";
				echo "<form class='4' method='POST' action='".setcomment($conn)."'>
					<input type='hidden' name='name' value='".$_SESSION['id']."'>
					<input type='hidden' name='date' value=" .date('Y-m-d H:i:s'). ">
					<textarea  name='coment' >
					</textarea>
					<button type='submit' name='PostSubmit'>Comment</button>
					</form>";
				echo "</div>";
			}
			else{
				echo "you have to signin";
			}
			    



				view($conn);
		?>
	</div>
	<br><br>
	<?php
		include 'footer.html'
	?>
</body>

</html>

