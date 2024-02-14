<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-LMS.de/create</title>
    <link rel="stylesheet" href="../../public/assets/css/create/style.css">
</head>
<body>
    <nav class="navbar">
        <h1 class="header">
            <a href="#">Lager Übersicht</a>
        </h1>
    </nav>
        <h1 class="create-header">Barcode erstellen:</h1>
    <form class="input-form" method="POST">
        <label class="lab0">Produkt Nummer</label>
            <input class="inp0" type="number" name="product_number">
        <label class="lab1">Prüfziffer</label>
            <input class="inp1" type="number" name="check_num">
        <label class="lab2">Erstellt von</label>
            <input class="inp2" type="text" name="creator" required>
        <label class="lab02">Zähler</label>
            <input class="inp02" type="number" name="counter" autocomplete="true">
        <label class="lab3">Erstellt am</label>
            <input class="inp3" type="datetime-local" name="time" autocomplete="true">
        <img src="../../public/assets/img/PNG/sub-barcodeImage.png" class="img1" alt="Image-Barcode">
        <button type="submit" class="btn0" name="create">Erstellen</button>
    </form>
        <div class="border-h1"></div>
    <div class="functions">
        <button type="submit" class="btn1">PDF-Erstellen</button>
        <button type="submit" class="btn2">Alle Barcodes Drucken</button>
    </div>
        <div class="border-v1"></div>
    <table class="table">
        <tr>
            <th>B-ID</th>
            <th>Nummer</th>
            <th>Name</th>
            <th>Bestand</th>
        </tr>
        <tr>
            <td>001</td>
            <td>8627194</td>
            <td>Drucker</td>
            <td>0001</td>
        </tr>
    </table>
</body>
</html>