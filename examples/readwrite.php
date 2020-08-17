<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Hello";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Hi";
fwrite($myfile, $txt);
fclose($myfile);
?>
