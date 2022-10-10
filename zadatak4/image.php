<!DOCTYPE html>
<html>
    <head>
    <title> PHP folders </title>
    <link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body>

<?php
$file = "folderZaSkeniranje/folder2/slika.jpg";
$imginfo = base64_encode(file_get_contents($file));
$src = 'data: ' .mime_content_type($file).';base64,'.$imginfo;
echo '<img src="' .$src . '">';
?> 
</body>
</html>
  