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
		
		$post = $post -> fetchAll(PDO::FETCH_OBJ);
		
		var_dump($post);
	}
}