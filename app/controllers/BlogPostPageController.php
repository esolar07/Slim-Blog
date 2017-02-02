<?php

namespace Blog\controllers;

use PDO;

use Blog\models\HomePageModel;

class BlogPostController extends Controller
{
	
	public function showBlogPost($request, $response, $args){
		
		$post = $this->c->db->query("SELECT * FROM guest_list WHERE id = :id");
		
		
		//var_dump($users);
		return $this->c->view->render($response, 'home.twig', compact('users') );
	}
	
	
	
}