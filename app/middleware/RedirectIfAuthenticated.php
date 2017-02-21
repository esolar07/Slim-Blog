<?php

namespace Blog\middleware;

use Slim\Interfaces\RouterInterface;
use Interop\Container\ContainerInterface;



class RedirectIfAuthenticated
{
	
	protected $router;
	
	public function __constructor($router)
	{
		$this->router = $router;
	}

	public function __invoke( $request, $response, $next)
	{
		if( isset($_SESSION['logged-in'])){
			$response = $response->withRedirect($this->router->pathFor('admin'));
		}
		
		return $next($request, $response);
	}
}
