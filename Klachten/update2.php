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
$id = $_POST["Soort"];
$klachten1 = new klachten();
$klachten1->search($id);

// properties in variables
$Soort = $klachten1->get_Soort();
$Beschrijving = $klachten1->get_Beschrijving();
?>

<h1 class="header-title">
    <?php echo $klachten1->get_Soort() ?>
    <br/>
    <?php echo $klachten1->get_Beschrijving() ?>
</h1>

<main class="main-form">
    <div class="form-container">
        <form action="update3.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>"><br>
            <input type="text" name="Soort" value="<?php echo $Soort; ?>"><br>
            <input type="text" name="Beschrijving" value="<?php echo $Beschrijving; ?>"><br>
            <input type="submit"><br>
        </form>
    </div>
</main>
</body>
</html>
