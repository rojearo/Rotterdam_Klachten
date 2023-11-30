<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet.css">
</head>
<body>

<header>

    <div class="navbar">
        <img src="Images/Logo-gemeente-Rotterdam.png" alt="Rotterdam_logo">
    </div>

</header> 
<?php
require "klachten.php";
// uitlezen vakjes van create1 ------
$Soort= $_POST["Soort"];
$Beschrijving = $_POST["Beschrijving"];


// maken object --------------------------------------------
$klachten1 = new klachten($Soort, $Beschrijving);
$klachten1->create();

// afdrukken object ------------------------------
echo "<br/>";
echo ($Soort);
echo "<br/>";
echo ($Beschrijving);
?>
</body>
</html>

