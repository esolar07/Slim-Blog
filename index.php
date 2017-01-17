<?php 


require 'vendor/autoload.php';

// instantiating Slim class
$app = new \Slim\App;


$container = $app->getContainer():


$container['Home'] = function() {
	return "Home Page Test!!";
}


// routing
$app->get("/", function{
	echo $this -> Home;
});

$app->get("/blog", function{
	echo "Blog Page Test";
});

// running app
$app -> run();