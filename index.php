<?php

$app = require __DIR__.'/lib/base.php';

$app->set('AUTOLOAD', 'inc/');
$app->set('CACHE', false);
$app->set('DEBUG', 3);
$app->set('GUI', 'ui/');
$app->set('PROXY', true);

include('data/config.inc.php');

$app->route('GET /', 'controller\main->start');
$app->route('GET /project/@hash', 'controller\main->getTranslations');

$app->run();
