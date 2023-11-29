<?php

require __DIR__ . '/vendor/autoload.php';

use App\Common\Environment;

Environment::load(__DIR__);

$env = getenv();

// echo '<pre>';
// print_r($env);
// echo '</pre>';

echo getenv('DB_HOST') . '<br>';
echo getenv('DB_USER') . '<br>';
echo getenv('DB_PASS') . '<br>';
echo getenv('DB_NAME') . '<br>';
