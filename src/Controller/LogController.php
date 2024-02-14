<?php

    namespace App\PHPLMS\src\Controller;

    use Monolog\Handler\StreamHandler;
    use Monolog\Level;
    use Monolog\Logger;

    class LogController {
        public function logger() {
            $log = new Logger('errors');
            $log->pushHandler(new StreamHandler('/Logs/errors.log', Level::Warning));
            // TODO I have to check out how to include in the complete Project!
        }
    }