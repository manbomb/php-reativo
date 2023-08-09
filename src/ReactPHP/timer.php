<?php

require_once '../../vendor/autoload.php';

$loop = React\EventLoop\Factory::create();

$timer = $loop->addPeriodicTimer(1, function () {
    echo '1 segundo' . PHP_EOL;
});


$loop->run();
