<?php
/************************/
/* app               */
/************************/

return [
	'environment' => 'development',
	'timezone' => 'America/Toronto',
		
	'boot' => [
		'http' => [
			'services' => '/app/boot/services.php',
			'middleware' => '/app/boot/middleware.php',
			'routes' => '/app/boot/routes.php'
		],
		'cli' => [
			'services' => '/core/boot/services.php',
			'commands' => '/core/boot/commands.php'
        ]
	]

];
