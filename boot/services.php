<?php
/************************/
/* Services             */
/************************/
$app->addService('exceptionHandler', function(\wiggum\foundation\Application $app) {
	return new wiggum\services\exceptionHandler\ExceptionHandler($app);
});

$app->addService('errorHandler', function(\wiggum\foundation\Application $app) {
	return new wiggum\services\errorHandler\ErrorHandler($app);
});

