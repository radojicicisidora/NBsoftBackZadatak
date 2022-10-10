<!DOCTYPE html>
<html>
    <head>
    <title> PHP folders </title>
    <link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body>

<?php

function is_image($image){
  $extension = pathinfo($image, PATHINFO_EXTENSION);
  $ext = ['jpg'];
  if(in_array($extension, $ext)){
    return true;
  }
  return false;
}


$filesInFolder = array();
$baseDir       = "folderZaSkeniranje";
$currentDir    = !empty($_GET['dir']) ? $_GET['dir'] : $baseDir;
$currentDir    = rtrim($currentDir, '/');
$iterator = new FilesystemIterator($currentDir);
echo "<h3>" . $iterator->getPath() . "</h3>";
 
foreach ($iterator as $entry) {
    $name = $entry->getBasename();

    if (is_dir($currentDir . '/' . $name)) {
        echo "<a href='?dir=" . $currentDir . "/" . $name . "'>" . $name . "</a><br />";
    } 
    elseif (is_image($currentDir . '/' . $name)) {
      echo "<a href=image.php>" . $name . "</a><br/>";
  }
    elseif (is_file($currentDir . '/' . $name)) {
        echo "<a href=file.php>" . $name . "</a><br/>";   
    }
}
?> 
</body>
</html>
