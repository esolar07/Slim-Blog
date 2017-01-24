<?php 

// routing
$app->get("/", function($request, $reponse){
	return $this->view->render($reponse, 'home.twig');
	echo "Home";
})->setName('home');

$app->get("/blog", function($request, $reponse){
	return $this->view->render($reponse, 'blog.twig');	
})->setName('blog');

$app->get("/contact", function($request, $reponse){
	return $this->view->render($reponse, 'contact.twig');	
})->setName('contact');

$app->get("/contact/confirm", function($request, $reponse){
	return $this->view->render($reponse, 'confirm.twig');	
})->setName('confirmation');

$app->post("/contact", function(){
	return $reponse->withRedirect('/contact/confirm');
})->setName('postContact');

?>