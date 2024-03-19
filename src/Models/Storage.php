<?php

    namespace App\PHPLMS\Models;

    use App\PHPLMS\Models\DB;

    class Storage {
        public int $product_id;
        public string $product_name;
        public float $product_price;
        public string $product_count;
 
        public function __construct($product_id, $product_name, $product_price, $product_count) {
            $this->product_id = $product_id;
            $this->product_name = $product_name;
            $this->product_price = $product_price;
            $this->product_count = $product_count;
        }

        public function dataRequest($product_id, $product_name, $product_price, $product_count, $data) {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php_lms");

            $sql = "SELECT * FROM 'products'";

            foreach ($db->con->query($sql) as $rows) {
                $rows = $data
                ([
                    'product_id' => $product_id,
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'product_count' => $product_count
                ]);
            }
            return $data;
        }
    }