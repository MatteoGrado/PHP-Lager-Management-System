<?php

    namespace App\PHPLMS\src\Models;

    class DB {
        public $con;
        public function __construct($host, $user, $pwd, $dbName) {
            $this->connect($host, $user, $pwd, $dbName);
        }

        protected function connect($host, $user, $pwd, $dbName) {
            try {
                $this->con = new \PDO("mysql:host=" . $host . ";dbname=" . $dbName, $user, $pwd);
                $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die("Failed to connect to DB!");
            }
        }
    }