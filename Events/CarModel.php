<?php

class CarModel extends Event {
	
	public $model;

	public function __construct($model) {
		parent::__construct();
		$this->model = $model;
	}

}