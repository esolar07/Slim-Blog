<?php

namespace Blog/handlers;

use Slim/handlers/AbstractHandler;
use Psr/Http/Message/ResponseInterface;
use Psr/Http/Message/ServerRequestInterface;
user Slim/View/Twig;


class NotFoundHander extends AbstractHandler
{
	
	protect $view;
	
	public function __construct(Twig $view){
		
		$this->view = $view;
		
	}
	
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response){
		
		return $this->view->render($response, 'errors/404.twig')->withStatus(404);
		
	}
}