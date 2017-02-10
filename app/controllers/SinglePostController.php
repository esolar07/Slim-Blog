<?php

namespace Blog\controllers;

use PDO;


class SinglePostController extends Controller
{
	
	public function showSinglePost($request, $response, $args){
		
		$post = $this->c->db->prepare("SELECT * FROM guest_list WHERE id = :id");
		
		$post -> execute([
			'id' => $args['id']
		]);
		
		$post = $post -> fetch(PDO::FETCH_OBJ);
		
		if ($post === false){
			
			$this->render404($response);
		
		} else {
		
			return $this->c->view->render($response, 'post.twig', compact('post') );
		
		}
	}
	
	
}