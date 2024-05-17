<?php

    namespace App\PHPLMS\Controller;

    use App\PHPLMS\Models\DB;

    class DashboardController {
        public int $product_id;
        public string $product_name;
        public float $product_price;
        public int $minimum_stock;
        public int $maximum_stock;

        public function __construct($product_id, $product_name, $product_price, $minimum_stock, $maximum_stock) {
            $this->product_id = $product_id;
            $this->product_name = $product_name;
            $this->product_price = $product_price;
            $this->minimum_stock = $minimum_stock;
            $this->maximum_stock = $maximum_stock;
        }
        public function getInfDB($row, $data, $product_id, $product_name, $product_price, $minimum_stock, $maximum_stock) {
            $db = new DB("127.0.0.1", "Admin", "Sumafelo03!", "php_lms");

            $sql = "SELECT * FROM products";

            $data = [];

            foreach ($db->con->query($sql) as $row) {
                $data [] = [
                    'product_id' => $product_id,
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'minimum_stock' => $minimum_stock,
                    'maximum_stock' => $maximum_stock
                ];
            }
            if (!empty($data)) {
                return $data;
            } else {
                echo "No data found!";
            }
        }
    }