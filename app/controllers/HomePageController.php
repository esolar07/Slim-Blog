<?php

namespace Blog\controllers;


class HomePageController extends Controller
{
	
	public function showBlogTitle($request, $response){
		return $this->c->view->render($response, 'home.twig');
	}
}