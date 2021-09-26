<?php
	include('connection.php');
	if(isset($_POST['submit_data'])){
		$Article_title = mysqli_real_escape_string($conn, $_POST['Article_title']);
		$Article_content = mysqli_real_escape_string($conn,$_POST['Article_content']);

		if(!empty($Article_title) || !empty($Article_content)){
				$sql = "INSERT INTO blog(Article_title,Article_content) VALUES('$Article_title', '$Article_content');";
				$result = mysqli_query($conn, $sql);

				if(!$result){
					echo "Failed to submit the data";
					exit();
				}
				else{
					header('refresh:5, url=dashboard.php');
					echo "Aricle Published Sucessfully";
					exit();
				}

		}else{
			header('Location: dashboard.php?emptyFields');
		}

	}else{
		header('Location: dashboard.php?invalidRequest');
		exit();
	}



?>