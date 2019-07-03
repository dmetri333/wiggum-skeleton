<?php
/************************/
/* Services             */
/************************/
$app->addService('router', function() {
    return new wiggum\services\router\Router($this);
});

$app->addService('exceptionHandler', function() {
	return new wiggum\services\exceptionHandler\ExceptionHandler($this);
});

$app->addService('errorHandler', function() {
	return new wiggum\services\errorHandler\ErrorHandler($this);
});

$app->addService('dictionary', function() {
    $dictionary = $this->config->get('dictionary', []);
    return new wiggum\services\dictionary\Dictionary($dictionary);
});
    
$app->addService('template', function() {
	return new wiggum\services\template\TemplateFactory($this);
});
	
