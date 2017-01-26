<?php

namespace Blog\controllers;


class HomePageController{
	
	public function showBlogTitle(){
		return $this->view->render($response, 'home.twig');
		echo "Blog Title";
	}
}