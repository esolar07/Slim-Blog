<?php

namespace Blog\controllers;

use PDO;

use Blog\models\HomePageModel;

class HomePageController extends Controller
{
	
	public function showBlogTitle($request, $response){
		
		$users = $this->c->db->query("SELECT * FROM guest_list")->fetchAll(PDO::FETCH_CLASS, HomePageModel::class);
		var_dump($users);
		die();
		return $this->c->view->render($response, 'home.twig');
	}
}