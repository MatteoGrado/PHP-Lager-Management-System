<?php

    namespace App\PHPLMS\src\Controller;

    use App\PHPLMS\src\Models\DB;

    class DashboardController {
        public function search() {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php-lms");

        }
    }