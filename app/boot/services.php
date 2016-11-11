<?php
/************************/
/* Services             */
/************************/
$app->addService('exceptionHandler', function() {
	return new wiggum\services\exceptionHandler\ExceptionHandler($this);
});

$app->addService('errorHandler', function() {
	return new wiggum\services\errorHandler\ErrorHandler($this);
});

$app->addService('template', function() {
	return new wiggum\services\template\TemplateFactory($this);
});
	