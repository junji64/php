<html>
<body>

<form action="upload_file.php" method="post" enctype="multipart/form-data">
<label for="file"> Filename: </label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_FILES["file"]["error"] > 0) {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
}
?>

</body>
</html>