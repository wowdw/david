<?php

require __DIR__ . '/../vendor/autoload.php';


try {
    (new Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {

}

$app = new \David\Application(
    realpath(__DIR__ . '/../')
);



return $app;