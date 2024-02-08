<?php

    namespace App\PHPLMS\src\Controller;

    use App\PHPLMS\src\Models\DB;

    class DashboardController {
        public function search($row, $data) {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php_lms");
            if (isset($_POST['submit'])) {
                $sql = "SELECT product_num FROM products";

                foreach ($db->con->query($sql) as $row) {
                    $row = $data;
                }

            }
        }
    }