<?php

require __DIR__.'/../vendor/autoload.php';

$kernel = new \wiggum\http\Kernel(
		new \wiggum\foundation\Application(realpath(__DIR__.'/../'))
	);
	
$kernel->run();
