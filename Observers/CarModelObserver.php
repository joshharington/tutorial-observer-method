<?php

class CarModelObserver implements \SplObserver {

	public function update(\SplSubject $event) {
		echo 'The car model is: ' . $event->model;
	}

}