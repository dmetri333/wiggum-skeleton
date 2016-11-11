<?php
/************************/
/* app               */
/************************/

return [
	'environment' => 'development',
	'timezone' => 'America/Toronto',
		
	'boot' => [
			'services' => '/app/boot/services.php',
			'middleware' => '/app/boot/middleware.php',
			'routes' => '/app/boot/routes.php'
		]
];
