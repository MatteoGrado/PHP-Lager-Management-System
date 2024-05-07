<?php
    if (isset($_GET['scan'])) {
        header("Location: index.php?page=scan");
        exit();
    }
    if (isset($_GET['create'])) {
        header("Location: index.php?page=create");
        exit();
    }
    if (isset($_GET['logout'])) {
        header("Location: index.php?page=logout");
        exit();
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
    <link rel="stylesheet" href="assets/css/dashboard/style.css?t=<?=time()?>">
</head>
<body>
<nav class="navbar">
    <h1 class="header">
        <a href="#">Lager Übersicht</a>
    </h1>
    <div class="button-bar">
        <form  method="GET" class="nav-form-buttons">
            <button type="submit" name="page" value="scan" class="btn0" >Scannen</button>
            <button type="submit" name="page" value="generate" class="btn1" >Code Erstellen</button>
            <button type="submit" name="page" value="logout" class="btn2" >Logout</button>
        </form>
    </div>
</nav>
</body>
</html>