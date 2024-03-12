<?php

    use App\PHPLMS\src\Controller\BarcodeController;
    use App\PHPLMS\src\Models\DB;

    if (isset($_POST['submit'])) {
        if (!empty('product_num') && !empty('barcode_type')) {
            $product_num = $_POST['product_num'];
            $barcode_type = $_POST['barcode_type'];
            //Call the Barcode Generator
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-LMS.de/Barcode-Generieren/</title>
    <link rel="stylesheet" href="../../public/assets/css/create/style.css">
</head>
<body>
    <nav class="navbar">
        <h1 class="header">
            <a href="#">Barcode Erstellen</a>
        </h1>
        <button type="submit" class="btn0-logout">Ausloggen</button>
    </nav>
    <form class="barcode-form" method="POST">
        <label class="lab0">Produkt Nummer:</label>
            <input class="inp0" type="number" name="product_num" required>
        <label class="lab1">Beschriftung:</label>
            <input class="inp1" type="text">
        <label class="lab2">Barcode-Typ:</label>
        <select class="barcode-select-type">
            <option value="C128" name="barcode_type">Code 128</option>
            <option value="C128A">Code 128 A</option>
            <option value="C128B">Code 128 B</option>
            <option value="C39">Code 39</option>
            <option value="C39E">Code 39 E</option>
            <option value="C93">Code 93</option>
            <option value="EAN8">EAN 8</option>
            <option value="EAN13">EAN 13</option>
        </select>
        <button type="submit" class="btn1">Generieren</button>
        <button type="submit" class="btn2">In PDF speichern</button>
        <button type="submit" class="btn3">Drucken</button>
    </form>
</body>
</html>