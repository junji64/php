<?php
$con = mysqli_connect("localhost","root","123123","my_db") or die(mysqli_connect_error()); 
$name = $_REQUEST['name'];
$image = mysqli_query($con,"SELECT * FROM images WHERE name='$name'");
$image = mysqli_fetch_assoc($image);
$image = $image['data'];
// header("Content-type: image/jpeg");
echo $image;
?>