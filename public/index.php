<?php

require __DIR__.'/../vendor/autoload.php';

$kernel = new \wiggum\foundation\Kernel(
		realpath(__DIR__.'/../')
	);
	
$kernel->run();
