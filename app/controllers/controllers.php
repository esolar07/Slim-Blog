<?php

namespace Blog\controllers;

use Interop\Container\ ContainerInterface;

class Controller{
	protected $c;
	
	public function __construct(ContainerInterface $c){
		$this->c = $c;
	}
}