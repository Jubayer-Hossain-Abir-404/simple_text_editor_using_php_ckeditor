<?php
	include('connection.php');
	$sql ="SELECT * FROM blog ORDER BY id DESC";
	$execute = mysqli_query($conn,$sql);
	$Postdata = mysqli_num_rows($execute);

?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0">
	<title>Blog</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="container">

	<?php
		if($Postdata > 0){
			while($row = mysqli_fetch_array($execute)){ 
				$timestamp = $row['Date_published'];
				$date =date('dS M Y', strtotime($timestamp));
				$time= date('h:i A', strtotime($timestamp));

			?>
				<h1><a href="details.php?id=<?php echo $row['id']; ?>"><?php echo $row['Article_title']; ?></a></h1>
				<span>Published on: <?php echo $date; ?> At: <?php echo $time; ?></span>
			<?php
			}
		}

	?>
</div>
</body>
</html>