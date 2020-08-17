<!DOCTYPE html>
<html>
<head>
	<title> Image Uploading Example </title>
</head>
<body>
	<form method="POST" action="image.php" enctype="multipart/form-data">
	File :  <input type="file" name="image">
			<input type="submit" name='submit' value="Upload">
	</form>

	<?php
	$con = mysqli_connect("localhost","root","123123","my_db") or die(mysqli_connect_error());

	$olds = mysqli_query($con,"SELECT * FROM images");

	if ( isset($_POST['submit']) ) {
		$file = $_FILES['image']['tmp_name'];
		if (!isset($file)) {
			echo " Please select an image !";
		}
		else {
			$image_name = addslashes($_FILES['image']['name']);
			$image_data = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_size = getimagesize($_FILES['image']['tmp_name']);
			
			if ($image_size == FALSE) {
				echo "That's not an image ! ";
			}
			else {
				$sql = "INSERT INTO images VALUES (NULL, '$image_name','$image_data')";
				
				if (!mysqli_query($con,$sql)) {
					echo "Problem in uploading image !" . mysqli_error($con);
				}
				else {
					$image = mysqli_query($con,"SELECT * FROM images WHERE name='$image_name'");
					$image = mysqli_fetch_array($image);
					echo "<h2> Newly Uploaded Images : $image_name </h2>";
					echo "<img src='data:image/jpeg;base64,".base64_encode($image['data'])."' width=250 height=200 /><br>" ;
				}
			}
		
		}
	}
	echo "<h2> Previously Uploaded Pictures </h2>";
	while ( $one = mysqli_fetch_array($olds) ) {
		echo "<a href='delete_img.php?id=". $one['id']."'> Delete </a>"; 
		echo "<img src='data:image/jpeg;base64," . base64_encode($one['data']) . "' width=250 height=200 /> <br>" ;
	}
	
	mysqli_close($con);
	?>
</body>
</html>