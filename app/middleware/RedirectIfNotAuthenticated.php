<?php

namespace Blog\middleware;

use Slim\Interfaces\RouterInterface;
use Interop\Container\ContainerInterface;



class RedirectIfNotAuthenticated
{
	
	protected $router;
	
	public function __construct($router)
	{
		$this->router = $router;
	}

	public function __invoke($request, $response, $next)
	{
		if( !isset($_SESSION['logged-in'])){
			$response = $response->withRedirect($this->router->pathFor('login'));
		}
		
		return $next($request, $response);
	}
}
