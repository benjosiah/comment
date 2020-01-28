<?php
$conn = mysqli_connect('localhost','root','','coment');

if (!$conn) {
	die("Connection failed:".mysqli_connect_error());
	# code...
}