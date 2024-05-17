<?php

    namespace App\PHPLMS\Controller;

    use App\PHPLMS\Models\DB;

    class  UserController {
        public function register($username, $password) {
            $db = new DB("127.0.0.1", "Admin", "Sumafelo03!", "php_lms");
            $isql = "INSERT INTO `users` (`user_id`, `username`, `password`, 'first_name', 'last_name',  'email')
                    VALUES (NULL, :username, :password)";
            $stmt = $db->con->prepare($isql);
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt->execute([':username' => $username, ':password' => $password]);
        }
        public function login($username, $password) {
            $db = new DB("127.0.0.1", "Admin", "Sumafelo03!", "php_lms");
            $ssql = "SELECT `username`, `password` FROM `users` WHERE `username` = :username";
            $stmt = $db->con->prepare($ssql);
            $stmt->execute([':username' => $username]);
            $userDataDB = $stmt->fetch(\PDO::FETCH_ASSOC);
            if(!$userDataDB) {
                echo "Falscher Benutzername!";
            }
            if(!empty($userDataDB) && password_verify($password, $userDataDB['password'])) {
                echo "Passwort falsch!";
            }
            header("Location: index.php?page=dashboard");
        }
    }