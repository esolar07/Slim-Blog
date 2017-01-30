<?php

// instantiating Slim class
$app = new \Slim\App([
	// set to false for live
	'settings' => [
		'displayErrorDetails' => true,
	]
]);

// gets container
$container = $app->getContainer();


// database cofing
$container['db'] = function(){
	
	$dbHost = 'localhost';
	$dbName = 'esolar07_babyshower';
	$dbUsername = 'esolar07_dbeddie';
	$dbUserPassword = 'kate3481';
	
	$pdo = new PDO ("mysql:host={$dbHost};dbname={$dbName}","{$dbUsername}", "{$dbUserPassword}");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
        'cache' => false
    ]);
    
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

require __DIR__ . '/../routes/routes.php';