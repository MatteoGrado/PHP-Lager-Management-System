<?php

    session_abort();

    include '../vendor/autoload.php';
    use App\PHPLMS\Controller;

    $UserController = new Controller\UserController();
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $UserController->login($username, $password);
    }

    $page = $_GET['page'] ?? 'login';

    switch ($page) {
        case 'login':
            include('../content/login/login.php');
            break;
        case 'dashboard':
            include('../content/dashboard/dashboard.php');
            break;
        case 'scan':
            include('../content/scanner/scan.php');
            break;
        case 'generate':
            include('../content/generate/generate.php');
            break;
    }