<?php

require __DIR__.'/../vendor/autoload.php';

$app = new \wiggum\foundation\Application(realpath(__DIR__.'/../'));

$config = $app->settings->get('config');

//add services
require_once $app->getBasePath().'/'.$config['load.services'];

//add middleware
require_once $app->getBasePath().'/'.$config['load.middleware'];

//add routes
require_once $app->getBasePath().'/'.$config['load.routes'];

//run
$app->run();