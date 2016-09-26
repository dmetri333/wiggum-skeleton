<?php
/************************/
/* services             */
/************************/

return [
	'exceptionHandler' => [
		'html' => [
			'404' => 'app/tpl/error/pageNotFound.tpl.php',
			'403' => 'app/tpl/error/forbidden.tpl.php',
			'500' => 'app/tpl/error/internalError.tpl.php'
		],
		'json' => '',
		'xml' => ''
	],
	'errorHandler' => [
		'html' => 'app/tpl/error/internalError.tpl.php',
		'json' => '',
		'xml' => ''
	]
];
?>