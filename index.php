<?php

$app = require __DIR__.'/lib/base.php';

$app->set('AUTOLOAD', 'inc/');
$app->set('CACHE', false);
$app->set('DEBUG', 3);
$app->set('GUI','gui/');
$app->set('LOCALES','dict/');
$app->set('PROXY',TRUE);

$app->run();

