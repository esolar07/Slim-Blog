<?php 

// routing
$app->get("/", function($request, $response){
	return $this->view->render($response, 'home.twig');
})->setName('home');

$app->get("/blog", function($request, $response){
	return $this->view->render($response, 'blog.twig');	
})->setName('blog');

$app->get("/contact", function($request, $response){
	return $this->view->render($response, 'contact.twig');	
})->setName('contact');

$app->get("/contact/confirm", function($request, $response){
	return $this->view->render($response, 'confirm.twig');	
})->setName('confirmation');

$app->post("/contact", function(){
	return $response->withRedirect('/contact/confirm');
})->setName('postContact');

