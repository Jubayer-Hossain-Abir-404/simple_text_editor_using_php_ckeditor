<?php 
	include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0">
	<title>Details</title>
</head>
<body>
	<?php
		if(isset($_GET['id'])){
			//include('connection.php');
			$auth_id = mysqli_real_escape_string($conn, $_GET['id']);
			$sql = "SELECT * FROM blog where id=$auth_id";
			$execute = mysqli_query($conn,$sql);
			$post = mysqli_fetch_assoc($execute);

			if($auth_id != $post['id']){
				header('refresh:3; url=index.php');
				echo "That id does not exist on our server";
				exit();
			}
		}
		else{
			header('Location: index.php');
			exit();
		}

	?>

	<h1><?php echo $post['Article_title'] ?></h1>
	<div class="content">
		<?php echo $post['Article_content']; ?>
	</div>
</body>
</html>