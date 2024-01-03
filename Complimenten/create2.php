<?php
require "complimenten.php";
// uitlezen vakjes van create1 ------
$Soort= $_POST["Soort"];
$Beschrijving = $_POST["Beschrijving"];
// maken object --------------------------------------------
$complimenten1 = new complimenten($Soort, $Beschrijving);
$complimenten1->create();

//// afdrukken object ------------------------------
//echo "<br/>";
//echo ($Soort);
//echo "<br/>";
//echo ($Beschrijving);


