<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom to Stagi </title>
    <link rel="stylesheet" href="./static/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php

require_once($ROOT.$DS."view".$DS."header.php");


$filepath = $ROOT.$DS."view".$DS.$controller.$DS;
$filename = "view".ucfirst($view).ucfirst($controller).'.php'; // détermine le nom du fichier
require_once($filepath.$filename);


require_once($ROOT.$DS."view".$DS."footer.php");

?>
</body>
</html>