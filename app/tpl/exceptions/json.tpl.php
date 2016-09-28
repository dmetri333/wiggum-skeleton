<?php
$json = [ 
		'message' => $error->getMessage()
];

if ($verboseMode) {
	$json['error'] = [];
	
	do {
		$json['error'][] = [ 
				'type' => get_class($error),
				'code' => $error->getCode(),
				'message' => $error->getMessage(),
				'file' => $error->getFile(),
				'line' => $error->getLine(),
				'trace' => explode("\n", $error->getTraceAsString()) 
		];
	} while ($error = $error->getPrevious());
}

echo json_encode($json, JSON_PRETTY_PRINT);