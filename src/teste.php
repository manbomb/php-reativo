<?php

use GuzzleHttp\Client;
use GuzzleHttp\Promise\Utils;

require_once '../vendor/autoload.php';

$client = new Client();

$promessa1 = $client->getAsync('http://localhost:8080/src/http-server.php');
$promessa2 = $client->getAsync('http://localhost:8000/src/http-server.php');

$respostas = Utils::unwrap([
    $promessa1,
    $promessa2
]);

echo 'Resposta 1: '. $respostas[0]->getBody()->getContents();
echo 'Resposta 2: '. $respostas[1]->getBody()->getContents();