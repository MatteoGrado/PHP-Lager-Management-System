<?php
    use App\PHPLMS\src\Models\DB;
    use App\CDN\src\Controller\DashboardController;

    $searchfunction = new DashboardController();
    if (isset($_POST['submit'])) {
        $searchfunction->search();
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
    <button type="submit" class="btn0">Logout</button>
    <h1 class="header">Lager Durchsuchen:</h1>
    <div class="storage-search">
        <input type="search" class="search" name="product_num">
        <button type="submit" class="btn1">Suchen</button>
    </div>
</body>
</html>