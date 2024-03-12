<?php

    use App\PHPLMS\src\Controller\BarcodeController;
    include '../../src/Controller/BarcodeController.php';

    if (!file_exists('C:\Users\matteo.grado\Ampps\www\Workspace\PHP-Lager-Management-System\src\Controller\BarcodeGeneratorController.php')) {
        echo "File not found!";
    }

    $generator = new BarcodeController();
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
        <label class="lab1">Beschriftung</label>
            <input class="inp1" type="text" name="description">
        <label class="lab2">Barcode-Typ</label>
            <select class="barcode-select-type">
                <option value="C128">Code 128</option>
                <option value="C128A">Code 128 A</option>
                <option value="C128B">Code 128 B</option>
                <option value="C39">Code 39</option>
                <option value="C39E">Code 39 E</option>
                <option value="C93">Code 93</option>
                <option value="EAN8">EAN 8</option>
                <option value="EAN13">EAN 13</option>
            </select>
        <div class="img-holder">
            <img
                src="data:image/jpg;base64,<?php base64_decode($generator->getBarcode());?>"
                alt="Barcode-Image"class="barcode-image">
            <button type="submit" class="btn1" name="print">Drucken</button>
            <button type="submit" class="btn2" name="download">Download</button>
        </div>
        <button type="submit" class="btn0" name="create">Erstellen</button>
    </form>
        <div class="border-v1"></div>
    <table class="table">
        <tr>
            <th>B-ID</th>
            <th>Nummer</th>
            <th>Name</th>
            <th>Bestand</th>
        </tr>
        <tr>
            <td><?php //vars ?></td>
            <td><?php //vars ?></td>
            <td><?php //vars ?></td>
            <td><?php //vars ?></td>
        </tr>
    </table>
</body>
</html>