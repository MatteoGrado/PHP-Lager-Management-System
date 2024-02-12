<?php
    // TODO Rewrite redirect method that we don't have any issues
    // Link: https://github.com/picqer/php-barcode-generator

    $redirect = new \App\PHPLMS\src\Controller\BarcodeController();
    if (isset($_POST['generate'])) {

        $redirect->redirect($url);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-LMS/dashboard</title>
    <link rel="stylesheet" href="../../public/assets/css/dashboard/style.css">
</head>
<body>
    <nav class="navbar">
        <h1 class="header">
            <a href="#">Lager Übersicht</a>
        </h1>
        <div class="button-bar">
            <button type="button" class="btn0">Scannen</button>
            <button type="button" name="generate" class="btn1">Codes Erstellen</button>
            <button type="button" class="btn2">Logout</button>
        </div>
    </nav>
    <div class="table">

    </div>
</body>
</html>