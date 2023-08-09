<?php

$streamList = [
    fopen('arquivo.txt', 'r'),
    fopen('arquivo2.txt', 'r'),
];

foreach ($streamList as $stream) {
    stream_set_blocking($stream, false);
}

