<?php
$env = parse_ini_file(__DIR__ . '/../env.ini'); 

foreach ($env as $key => $value) {
    putenv("$key=$value");
//    $_ENV[$key] = $value;
}