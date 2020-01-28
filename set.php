<?php
	function setcomment($conn){	
		if (isset($_POST['PostSubmit'])) {
			$name= $_POST['name'];
			$date= $_POST['date'];
			$coment= $_POST['coment'];
			if ($coment) {
				$sql = " INSERT INTO coments (name,date,coment)VALUES('$name','$date','$coment')";
				$result= $conn->query($sql);
				header("location:video.php?commentsuccessfull");
			}	
			else{
				echo "fill the form";
			}	
		}
			
	}

	function show($conn){
		$id=$_POST['name'];
		$sql2="SELECT * FROM user WHERE id='$id'";
		$result2= $conn->query($sql2);
			if ($row2= $result2->fetch_assoc()) {}
	}

	function view($conn){
		$sql="SELECT * FROM coments ORDER BY id DESC ";
		$result= $conn->query($sql);
		while($row= $result->fetch_assoc()){
			$id=$row['name'];
			$sql2="SELECT * FROM user WHERE id='$id'";
			$result2= $conn->query($sql2);
			if ($row2= $result2->fetch_assoc()) {
				echo "<div class='commet_box'H><p>";
				echo $row2['name']."<br>";
				echo $row['date']."<br>";
				echo $row['coment']."<br><br>";
				echo"</p>";
				if (isset($_SESSION['id'])) {
					if ($_SESSION['id']==$row2['id']) {
						echo"<form method='POST' action='editCommet.php' class='edit-form'>
						<input type='hidden' name='id' value='".$row['id']."'>
						<input type='hidden' name='name' value='".$row['name']."'>
						<input type='hidden' name='date' value='".$row['date']."'>
						<input type='hidden' name='coment' value='".$row['coment']."'>
						<button>Edit</button>
					</form>
					<form method='POST' action='".deletecomment($conn)."' class='delete-form'>
						<input type='hidden' name='id' value='".$row['id']."'>
						<input type='hidden' name='name' value='".$row['name']."'>
						<input type='hidden' name='date' value='".$row['date']."'>
						<input type='hidden' name='coment' value='".$row['coment']."'>
						<button name='delete'>Delete</button>
					</form>";

					}
					else{
						echo"<form method='POST' action='editCommet.php' class='edit-form'>
						<input type='hidden' name='id' value='".$row['id']."'>
						<input type='hidden' name='name' value='".$row['name']."'>
						<input type='hidden' name='date' value='".$row['date']."'>
						<input type='hidden' name='coment' value='".$row['coment']."'>
						<button>Reply</button>
					</form>";

					}
				}
				
				echo "</div>";  
			}
			
	

		}

	}

	function editcomment($conn){
		if (isset($_POST['submit'])) {
			$id= $_POST['id'];
			$name= $_POST['name'];
			$date= $_POST['date'];
			$coment= $_POST['coment'];
			
			$sql = "UPDATE coments SET coment='$coment' WHERE id='$id'";
			$result= $conn->query($sql);
			header("location:video.php");


				
			}
		}

	function deletecomment($conn){
		//$delete=$_POST['delete'];
		if (isset($_POST['delete'])) {
			$id= $_POST['id'];
			$name= $_POST['name'];
			$date= $_POST['date'];
			$coment= $_POST['coment'];
			
			$sql = " DELETE FROM coments WHERE id='$id'";
			$result= $conn->query($sql);
			header("location:video.php");
		}
	}

	function SignIn($conn){
		if (isset($_POST['Signinsubmit'])) {
			$name= $_POST['name'];
			$email= $_POST['email'];
			
			$sql = " SELECT * FROM user WHERE name='$name' AND email='$email'";
			$result= $conn->query($sql);
			if (mysqli_num_rows($result)> 0) {
				if ($row= $result->fetch_assoc()) {
					$_SESSION['id']= $row['id'];
					$_SESSION['name']=$row['name'];
					header('location:video.php?loginsuccessful');
					exit();
				}
			}
			else{
				header('location:index.php?loginfailed');
					exit();
			}
		}
	}

	function SignOut(){
		if (isset($_POST['SignoutSubmit'])) {
			session_start();
			session_destroy();
			header('location:index.php');
			exit();
		}
	}

	function SignUp($conn){
		if (isset($_POST['Signupsubmit'])) {
			$name= $_POST['name'];
			
			$email=$_POST['email'];
			
			$sql = "INSERT INTO user (name,email,)VALUES('$name','$email')";
			$result= $conn->query($sql);
			header("location:index.php");
			exit();
			
		}
	}
/*function upload($conn){

	$name=$_POST['name'];
	$picture = "files/".$_FILES['upload']['name'];
	if(move_uploaded_file($_FILES['upload']['tmp_name'], $picture)){
		$message = "";
	}
	else {
		$message = "<h4>File not uploaded</h4>";
	}

	if (isset($_POST[UploadSubmit])) {
		$sql = " INSERT INTO videos (name,picture)VALUE('$name','$picture')";
		$result= $conn->query($sql);
		header("location:video.php");	
		}
}*/


?>

		