<?php 


require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../config/app.php';

$container['Home'] = function($request, $response) {
	return $this->view->render($reponse, 'home.twig');;
}


// running app
$app -> run();