<?php

    namespace App\PHPLMS\src\Controller;

    use App\PHPLMS\src\Models\DB;
    use Picqer\Barcode\BarcodeGeneratorJPG;

    class BarcodeGeneratorController {
        public function createBarcode(): mixed {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "php_lms");
            if (!empty('product_number')) {
                $product_num = $_POST['product_number'];

                $sql = "SELECT 'product_number, 'product_name', 'storage' FROM 'products'";
                foreach ($db->con->query($sql) as $data) {
                    return $data;
                }

                $generator = new BarcodeGeneratorJPG();
            } else {
                echo "Bitte geben Sie eine Produktnummer ein!";
            }
        }
    }