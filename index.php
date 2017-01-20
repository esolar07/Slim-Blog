<?php 


require 'vendor/autoload.php';

// instantiating Slim class
$app = new \Slim\App;

// gets container
$container = $app->getContainer():

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(_DIR_ . 'resources/view', [
        'cache' => false
    ]);
    
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

$container['Home'] = function($request, $response) {
	return $this->view->render($reponse, 'home.twig');;
}


// routing
$app->get("/", function{
	return $this->view->render($reponse, 'home.twig');;	
})->setName('Home');

$app->get("/blog", function{
	return $this->view->render($reponse, 'blog.twig');;	
})->setName('Blog');

$app->get("/contact", function{
	return $this->view->render($reponse, 'contact.twig');;	
))->setName('Contact');

$app->get("/contact/confirm", function{
	return $this->view->render($reponse, 'confirm.twig');;	
))->setName('Confirmation');

$app->post("/contact", function{
	return $reponse->withRedirect('/contact/confirm');;	
))->setName('postContact');


// running app
$app -> run();