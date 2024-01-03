<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require "complimenten.php";
$id = $_POST["id"];
$delete = $_POST["deleteBox"];

if ($delete == "ja") {
    $complimenten1 = new complimenten();
    $complimenten1->delete($id);
}
?>
<a href="../homepage.html">ga terug</a>
</body>
</html>
