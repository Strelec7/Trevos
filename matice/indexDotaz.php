<?php
require_once "matice.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>výpočet matic</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Generátor matice</h1>
    <div class="container">
        <form action="indexVysledek.php" method="GET">
            <div>Zadej počet sloupců<input type="text" name="columns"></div>
            <div>Zadej počet řádků <input type="text" name="lines"></div>
        <button name="send">Odeslat</button>
        </form>
    </div>
   


</body>
</html>