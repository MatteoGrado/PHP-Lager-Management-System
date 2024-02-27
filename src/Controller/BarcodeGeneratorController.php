<?php

    namespace App\PHPLMS\src\Controller;

    use App\PHPLMS\src\Models\DB;
    use Picqer\Barcode\BarcodeGeneratorJPG;

    class BarcodeGeneratorController {
        public function getProductNum($product_num, $barcode_type) {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php_lms");

            $sql = "SELECT 'product_num' FROM 'products'";
            foreach ($db->con->query($sql) as $row) {
                if (!$row == 0) {
                    $data = $row(['product_num' => $product_num, 'barcode_type' => $barcode_type]);
                } else {
                    die("Kein Produkt mit dieser Produktnummer gefunden!");
                }
                return $data;
            }
        }
        public function getBarcode($product_num, $product_type) {
            if ($product_num == 'product_num' && $barcode_type = 'barcode_type') {
                $generator = new BarcodeGeneratorJPG();
                $generator->getBarcode();
                return $generator;
            }
            return false;
        }
    }