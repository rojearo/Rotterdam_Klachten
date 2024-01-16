<?php
require "klachten.php";
// uitlezen vakjes van create1 ------
$Soort= $_POST["Soort"];
$Beschrijving = $_POST["Beschrijving"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
// maken object --------------------------------------------
$klachten1 = new klachten($Soort, $Beschrijving, $latitude, $longitude);
$klachten1->create();

//// afdrukken object ------------------------------
//echo "<br/>";
//echo ($Soort);
//echo "<br/>";
//echo ($Beschrijving);
//echo ($latitude);
//echo "<br/>"


