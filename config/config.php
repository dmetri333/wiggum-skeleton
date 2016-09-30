<?php
/************************/
/* config               */
/************************/

return [
	'environment' => 'development',
	
	'timezone' => 'America/Toronto',
		
	'boot' => [
			'services' => '/boot/services.php',
			'middleware' => '/boot/middleware.php',
			'routes' => '/boot/routes.php'
		]
];
?>