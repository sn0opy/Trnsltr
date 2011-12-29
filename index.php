<?php

$app = require __DIR__.'/lib/base.php';

$app->set('AUTOLOAD', 'inc/');
$app->set('CACHE', false);
$app->set('DEBUG', 3);
$app->set('GUI', 'ui/');

include('data/config.inc.php');

// Routes, that are displaying an overview
$app->route('GET /', 'controller\main->start');
$app->route('GET /project/@project', 'controller\projects->showProject');
$app->route('GET /project/@project/@lang', 'controller\strings->showStringsToLang');
$app->route('GET /string/@hash', 'controller\strings->showString');

// Routes that add new Entries to the database
$app->route('POST /project', 'controller\projects->addProject');
$app->route('POST /string', 'controller\strings->addString');
$app->route('POST /translation', 'controller\translations->addTranslation');

// Routes that edit existing Entries
$app->route('POST /project/@hash', 'controller\projects->editProject');
$app->route('POST /string/@hash', 'controller\strings->editString');
$app->route('POST /translation/@hash', 'controller\translations->editTranslation');

// Ajax stuff
$app->route('POST /ajax/translate/@hash/@lang', 'controller\translations->editTranslation');

$app->run();
