<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$templateLoader = new Twig_Loader_Filesystem(__DIR__ . '/../src/templates');
$twig = new Twig_Environment($templateLoader, array());

$app->get('/', function () use ($app, $twig) {
    return $twig->render('index.html', array());
});

$app->run();

