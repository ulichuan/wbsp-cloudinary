<?php
include __DIR__ . "/../vendor/autoload.php";
include __DIR__ . "/../vendor/config-cloud.php";

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$slug = $_POST['slug'];
		$file = $_FILES['file']['name'];
		$file_tmp = $_FILES['file']['tmp_name'];

		\Cloudinary\Uploader::upload($file_tmp, array("public_id" => $slug));
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PhotoMetu01</title>
	<style type="text/css">
		img {
			width: 200px;
			margin-right: 10px;
		}
	</style>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<input type="text" name="name" required="" placeholder="Yor name">
		<input type="text" name="slug" required="" placeholder="The slug">
		<!-- <input type="file" name="file"> -->
		<?php echo cl_image_upload_tag('image_id'); ?>
		<input type="submit" name="submit" value="Subir">
	</form>
	<br>
	<hr>
	 
	<?php echo cl_image_tag('queso slug'); ?>

</body>
</html>
