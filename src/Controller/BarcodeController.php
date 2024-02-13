<?php

    namespace App\PHPLMS\src\Controller;

    use Picqer\Barcode\BarcodeGeneratorJPG;

    class BarcodeController {
        public function generate() {


            $sql = "SELECT * FROM products";


            $generator = new BarcodeGeneratorJPG();

        }
        public function read() {

        }
    }