<!DOCTYPE html>
<html>
    <head>
    <title> PHP folders </title>
    <link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body>

<?php
$myfile = fopen("folderZaSkeniranje/file.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("folderZaSkeniranje/file.txt"));
fclose($myfile);
?> 

</body>
</html>
