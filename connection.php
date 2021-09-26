<?php
	$conn=mysqli_connect("localhost","root","","ckeditor");

	if(!$conn){
		echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>Not able to establish Database Connection</h3>"; 
		exit();
	}
?>