<?php

require __DIR__.'/../vendor/autoload.php';

$app = new \wiggum\foundation\Application(realpath(__DIR__.'/../'));

$config = $app->settings->get('config');

define('BASE_PATH', $app->getBasePath());

//add services
require_once $app->getBasePath().'/'.$config['boot.services'];

//add middleware
require_once $app->getBasePath().'/'.$config['boot.middleware'];

//add routes
require_once $app->getBasePath().'/'.$config['boot.routes'];

//run
$app->run();