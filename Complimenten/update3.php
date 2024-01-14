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
// info uit de array in de variabelen
$id = $_POST["id"];
$Soort = $_POST["Soort"];
$Beschrijving = $_POST["Beschrijving"];

// maken van object
$complimenten1 = new complimenten($Soort, $Beschrijving); // maakt object
$complimenten1->update($id);
echo ". <br/>";
echo $id ."<br/>";
$complimenten1->afdrukken();
?>
<br>
<a href="../homepage.html">ga terug</a>
</body>
</html>
