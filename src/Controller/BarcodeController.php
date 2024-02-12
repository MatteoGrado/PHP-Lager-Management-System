<?php

    namespace App\PHPLMS\src\Controller;

    use Picqer\Barcode\BarcodeGeneratorJPG;

    class BarcodeController {
        public function redirect($url) {
            header("Location: $url");
            exit();
        }
        public function generate() {
            $generator = new BarcodeGeneratorJPG();
        }
        public function read() {

        }
    }