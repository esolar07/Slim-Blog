<?php 

use Blog\controllers\HomePageController;
use Blog\controllers\SinglePostController;
use Blog\controllers\BlogPostPageController;
use Blog\middleware\RedirectIfNotAuthenticated;
use Blog\middleware\DisplayAdminMenuItem;

/*******************
 routing 
 *******************/

// home
$app->get("/", HomePageController::class . ':showBlogTitle')->setName('home')->add(new DisplayAdminMenuItem());

// blog
$app->get("/blog", BlogPostPageController::class . ':showBlogPost')->setName('blog');

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

// admin
$app->get("/admin", function($request, $response){
	return $this->view->render($response, 'admin.twig');	
})->setName('admin')->add(new RedirectIfNotAuthenticated($container->get('router')));

// login - have to add login controller
$app->get("/login",  function($request, $response){
	return $this->view->render($response, 'login.twig');	
})->setName('login');
