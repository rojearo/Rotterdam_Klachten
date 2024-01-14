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
require "klachten.php";
$id = $_POST["id"];
$klachten1 = new klachten();
$klachten1->search($id);
?>

<form action="delete3.php" method="post">
    <!--$movid mag niet meer gewijzigd worden -->
    <input type="hidden" name="id" value=" <?php echo $id ?> ">
    <!-- 2x verwijderBox om nee of ja door te kunne geven -->
    <input type="hidden" name="deleteBox" value="nee">
    <input type="checkbox" name="deleteBox" value="ja">
    <label for="deleteBox">verwijder klacht</label><br/><br/>
    <input type="submit"><br/><br/>
</form>
</body>
</html>