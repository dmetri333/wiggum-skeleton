<?php
namespace app\components\helloWorld;

use \wiggum\foundation\Controller;
use \wiggum\http\Request;
use \wiggum\http\Response;

class HelloWorld extends Controller {
	
	/**
	 * 
	 * @param Request $request
	 * @param Response $response
	 * @return Response
	 */
	public function doDefault(Request $request, Response $response) {
		
		$tpl = $this->template->getTemplate('app/components/helloWorld/tpl');
		$tpl->set('title', 'Hello World!');
		$tpl->set('content', 'This is the hello world template');
		
		$response->setOutput($tpl->fetch('helloWorld'));
		
		return $response;
	}
	
}
?>