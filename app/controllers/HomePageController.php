<?php

namespace Blog\controllers;

use PDO;

use Blog\models\HomePageModel;

class HomePageController extends Controller
{
	
	public function showBlogTitle($request, $response){
		
		$users = $this->c->db->query("SELECT * FROM guest_list ORDER BY id DESC LIMIT 5")->fetchAll(PDO::FETCH_CLASS, HomePageModel::class);
		
		return $this->c->view->render($response, 'home.twig', compact('users') );
	}
	

}