<html>

	<head>
		<title>Uploading File</title>
	</head>

	<body>
		<form action="fum.php" method="post" enctype="multipart/form-data">
			<h2>Upload FIle</h2>
			<label for="fileSelect">Filename : </label>
			<input type="file" name="photo" id="fileSelect"/>
			<input type="submit" name = "submit" value="Upload"/>
			<p><strong>Note : </strong>Only .jpg, .jpeg, .png formats allowwed to maximum size of 2MB.</p>
		</form>
	</body>
</html>
