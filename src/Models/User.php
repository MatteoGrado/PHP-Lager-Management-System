<?php

    namespace App\PHPLMS\src\Models;

    class User {
        public $userID;
        public $first_name;
        public $last_name;
        public $username;
        public $email;

        public function __construct($userID, $first_name, $last_name, $username, $email) {
            $this->userID = $userID;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->username = $username;
            $this->email = $email;
        }

        ‚

    }