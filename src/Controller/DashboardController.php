<?php

    namespace App\PHPLMS\src\Controller;

    use App\PHPLMS\Models\DB;

    class DashboardController {
        public int $product_id;
        public string $product_name;
        public int $product_storage_count;
        public string $product_price;

        public function __construct($product_id, $product_name, $product_storage_count, $product_price) {
            $this->product_id = 0;
            $this->product_name = $product_name;
            $this->product_storage_count = $product_storage_count;
            $this->product_price = $product_price;
        }

        public function dataRequest($row, $data, $product_id, $product_name, $product_storage_count, $product_price) {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php_lms");

            $sql = "SELECT product_num FROM products";

            foreach ($db->con->query($sql) as $row) {
                $row = $data
                ([
                    'product_id' => $product_id,
                    'product_name' => $product_name,
                    'product_storage_count' => $product_storage_count,
                    'product_price' => $product_price
                ]);
            }
            return $data;
        }


    }