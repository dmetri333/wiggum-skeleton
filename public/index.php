<?php

require __DIR__.'/../vendor/autoload.php';

$kernel = new \wiggum\foundation\Kernel(
		new \wiggum\foundation\Application(realpath(__DIR__.'/../'))
	);
	
$kernel->run();
