<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-LMS.de/register</title>
    <link rel="stylesheet" href="../../public/assets/css/register/style.css">
</head>
<body>
<div class="registration-container">
    <form class="registration-form" method="POST">
        <h2 class="header">Registrieren</h2>
        <div class="input-group">
            <label for="first-name">Vorname:</label>
            <input type="text" id="first-name" name="first-name" required>
        </div>
        <div class="input-group">
            <label for="last-name">Nachname:</label>
            <input type="text" id="last-name" name="last-name" required>
        </div>
        <div class="input-group">
            <label for="company">Unternehmen:</label>
            <input type="text" id="company" name="company">
        </div>
        <div class="input-group">
            <label for="email">E-Mail:</label>
            <input type="email" id="email" name="email" required>
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
            <button type="submit">Registrieren</button>
        </div>
    </form>
    <div class="login-link">
        <a href="#">Sie haben bereits ein Konto?</a>
    </div>
</div>
</body>
</html>