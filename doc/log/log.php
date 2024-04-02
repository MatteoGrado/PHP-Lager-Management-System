<?php

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;
    use Monolog\Formatter\JsonFormatter;

    $log = new Logger('Logger');

    $streamHandler = new StreamHandler('log.json', Logger::INFO);

    $jsonFormatter = new JsonFormatter();
    $streamHandler->setFormatter($jsonFormatter);

    $log->pushHandler($streamHandler);