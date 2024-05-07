<?php

    use Monolog\Logger;
    use Monolog\Formatter\JsonFormatter;
    use Monolog\Handler\StreamHandler;

    $log = new Logger('Logger:');

    $handler = new StreamHandler('app.log', Logger::DEBUG);
    $handler->setFormatter(new JsonFormatter());

    $log->pushHandler($handler);