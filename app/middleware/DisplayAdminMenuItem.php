<?php

namespace Blog\middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig as View;


class DisplayAdminMenuItem
{
	
    protected $view;

    public function __construct(View $view){

        $this->view = $view;
    
    }



	public function __invoke(Request $request, Response $response, $next) { 
		
        $session = true;

        if( !isset($_SESSION['logged-in'])){
			
           $session = false;
		}
        
        $this->view[$session];

        $request = $next($request, $response);
        return $response;
	}
}