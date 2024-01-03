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
$complimenten1 = new complimenten();
$complimenten1->search($id);

// properties in variables
$Soort = $complimenten1->get_Soort();
$Beschrijving = $complimenten1->get_Beschrijving();
?>

<form action="update3.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>"><br>
    <input type="text" name="Soort" value="<?php echo $Soort;?>"><br>
    <input type="text" name="Beschrijving" value="<?php echo $Beschrijving;?>"><br>
    <input type="submit"><br>
</form>
</body>
</html>
