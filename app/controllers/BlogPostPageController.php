<?php

namespace Blog\controllers;

use PDO;


// Displays all blog postings
class BlogPostPageController extends Controller
{
	
	public function showBlogPost($request, $response){
		
		$posts = $this->c->db->query("SELECT * FROM guest_list  ORDER BY id DESC");
		
		return $this->c->view->render($response, 'blog.twig', compact('posts') );
	}
	
	
	
}