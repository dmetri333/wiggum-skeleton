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
		'console' => [
			'services' => '/app/boot/services.php',
			'commands' => '/app/boot/commands.php'
        ]
	]

];
