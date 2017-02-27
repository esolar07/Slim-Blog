<?php 

namespace Blog\models;

class HomePageModel
{
	
	public function upperCaseHeading(){
		
		return strtoupper("{$this->name}");
	
	}	
}