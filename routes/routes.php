<?php 

use Blog\controllers\HomePageController;
use Blog\controllers\SinglePostController;


/*******************
 routing 
 *******************/

// home
$app->get("/", HomePageController::class . ':showBlogTitle')->setName('home');

// blog
$app->get("/blog", function($request, $response){
	return $this->view->render($response, 'blog.twig');	
})->setName('blog');

// single post
$app->get("/post/{id}", SinglePostController::class . ':showSinglePost')->setName('post');

// contact
$app->get("/contact", function($request, $response){
	return $this->view->render($response, 'contact.twig');	
})->setName('contact');

$app->get("/contact/confirm", function($request, $response){
	return $this->view->render($response, 'confirm.twig');	
})->setName('confirmation');

$app->post("/contact", function(){
	return $response->withRedirect('/contact/confirm');
})->setName('postContact');

