<?php

require_once '../../vendor/autoload.php';

use React\EventLoop\Factory;
use React\Stream\ReadableStream;

$loop = Factory::create();



$loop->run();
