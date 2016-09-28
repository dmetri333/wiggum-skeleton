<?php
/************************/
/* services             */
/************************/

return [
	'exceptionHandler' => [
		'html' => [
			'404' => 'app/tpl/exceptions/html/pageNotFound.tpl.php',
			'403' => 'app/tpl/exceptions/html/forbidden.tpl.php',
			'500' => 'app/tpl/exceptions/html/internalError.tpl.php'
		],
		'json' => 'app/tpl/exceptions/json.tpl.php',
		'xml' => 'app/tpl/exceptions/xml.tpl.php'
	],
	'errorHandler' => [
		'html' => 'app/tpl/error/html.tpl.php',
		'json' => 'app/tpl/error/json.tpl.php',
		'xml' => 'app/tpl/error/xml.tpl.php'
	]
];
?>