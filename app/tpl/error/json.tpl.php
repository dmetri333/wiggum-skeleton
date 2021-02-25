<?php

$json = [
	'status' => [
		'error' => true,
		'code' => $error->getCode(),
		'message' => 'Wiggum Application Error'
	],
	'processTime' => microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']
];

if ($verboseMode) {
	$json['status'] = [
		'error' => true,
		'type' => get_class($error),
		'code' => $error->getCode(),
		'message' => $error->getMessage(),
		'file' => $error->getFile(),
		'line' => $error->getLine(),
		'trace' => explode("\n", $error->getTraceAsString()) 
	];
}

echo json_encode($json, JSON_PRETTY_PRINT);