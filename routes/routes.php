<?php 

// routing
$app->get("/", function{
	return $this->view->render($reponse, 'home.twig');;	
})->setName('home');

$app->get("/blog", function{
	return $this->view->render($reponse, 'blog.twig');;	
})->setName('blog');

$app->get("/contact", function{
	return $this->view->render($reponse, 'contact.twig');;	
))->setName('contact');

$app->get("/contact/confirm", function{
	return $this->view->render($reponse, 'confirm.twig');;	
))->setName('confirmation');

$app->post("/contact", function{
	return $reponse->withRedirect('/contact/confirm');;	
))->setName('postContact');