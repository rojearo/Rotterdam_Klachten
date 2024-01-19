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
        <div class="navbar-images">
            <a href="/Rotterdam_Klachten/index.php"><img
                        src="/Rotterdam_Klachten/Images/Logo-gemeente-Rotterdam.png " alt="Rotterdam_logo"></a>
        </div>

        <div style="width: 500px">
            <div class="navbar-links">
                <ul>
                    <li><a href="/Rotterdam_Klachten/Klachten/create1.php">Klachten</a></li>
                    <li><a href="/Rotterdam_Klachten/Complimenten/create1.php">Complimenten</a></li>
                    <li><a href="/Rotterdam_Klachten/index.php">Login</a></li>
                </ul>
            </div>
        </div>
    </div>

</header>
<?php
require "klachten.php";
// info uit de array in de variabelen
$id = $_POST["id"];
$Soort = $_POST["Soort"];
$Beschrijving = $_POST["Beschrijving"];

// maken van object
$klachten1 = new klachten($Soort, $Beschrijving); // maakt object
$klachten1->update($id);
?>
<br>
<h1 class="header-title">
    <?php echo $klachten1->afdrukken()?>
</h1>

<main>
    <div class="Homepage-container">

        <div class="klachten">

            <h2 style="font-size: 70px">Klachten</h2>

            <div class="klachten-text">

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi consequuntur est ex fugiat ipsum
                    minima minus modi nam nemo nobis perferendis ratione repellat, saepe velit? Maxime neque officia
                    pariatur.
                </p>

            </div>

            <div class="Klachten-Button">

                <a href="Klachten/create1.php"><input type="submit" value="Melden via de website" style="border-radius: 12px;
background: #C93675;height: 65px; width: 230px; color:#FFFFFF; font-weight:bold;"></a>

            </div>

        </div>

        <div class="complimenten">
            <div>

                <h2 style="font-size: 70px">Complimenten</h2>

                <div class="compliment-text">

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda commodi deserunt dicta,
                        eaque et
                        id
                        ipsa laboriosam magni minima minus nemo, nulla saepe sequi. Alias debitis delectus nisi
                        recusandae
                        velit?
                    </p>

                </div>

            </div>

            <div class="complimenten-Button">

                <input type="submit" value="Melden via de website" style="border-radius: 12px;
background: #C93675;height: 65px; width: 230px; color:#FFFFFF; font-weight:bold;">

            </div>

        </div>

    </div>


</main>
</body>
</html>
