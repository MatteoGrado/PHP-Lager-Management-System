<?php

    use App\PHPLMS\src\Controller;

include '../src/Controller/UserController.php';
    include '../src/Models/DB.php';

    $UserController = new Controller\UserController();
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $UserController->controller();
        $UserController->login($username, $password);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-LMS.de</title>
    <link rel="stylesheet" href="assets/css/login/style.css">
</head>
<body>
<div class="login-container">
    <form class="login-form" method="POST">
        <h2>Login</h2>
        <div class="input-group">
            <label for="username">Benutzername:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Passwort:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="input-group">
            <label for="confirm-password">Passwort Bestätigen:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
        </div>
        <div class="input-group">
            <input type="checkbox" id="remember-me" name="remember-me">
            <label for="remember-me">Remember me!</label>
        </div>
        <div class="input-group">
            <a href="#">Passwort vergessen?</a>
        </div>
        <div class="input-group">
            <button type="submit">Login</button>
            <a href="../content/register/register.php" class="register-link">Noch kein Konto?</a>
        </div>
    </form>
</div>
</body>
</html>