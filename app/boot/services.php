<?php
/************************/
/* Services             */
/************************/
$app->addService('exceptionHandler', function() {
	return new wiggum\services\exceptionHandler\ExceptionHandler($this->app);
});

$app->addService('errorHandler', function() {
	return new wiggum\services\errorHandler\ErrorHandler($this->app);
});

$app->addService('router', function() {
    return new wiggum\services\router2\Router($this->app);
});

$app->addService('dictionary', function() {
    $dictionary = $this->app->config->get('dictionary', []);
    return new wiggum\services\dictionary\Dictionary($dictionary);
});
    
$app->addService('template', function() {
	return new wiggum\services\template\TemplateFactory($this->app);
});
