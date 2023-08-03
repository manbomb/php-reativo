<?php

$espera = rand(1, 5);
sleep($espera);

echo "Resposta do servidor que demorou $espera segundos" . PHP_EOL;
