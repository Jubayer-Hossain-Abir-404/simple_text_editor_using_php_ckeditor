<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="process.php" method="POST">
			<div class="input-field">
				<label for="title">Enter Title</label>
				<input type="text" name="Article_title" id="title">
			</div>

			<textarea name="Article_content" id="Article_editor"></textarea>

			<input type="submit" class="publish-btn" name="submit_data" value="publish">
		</form>

		<a href="index.php" target="_blank">Blog</a>
	</div>
	<script src="ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace('Article_editor');
	</script>
</body>
</html>