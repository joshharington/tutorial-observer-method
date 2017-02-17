<?php

class Event implements \SplSubject {

	// Store all the observers
	protected $storage;

	// constructor
	public function __construct() {
		$this->storage = new \SplObjectStorage();
	}

	// attach
	public function attach(\SplObserver $observer) {
		$this->storage->attach($observer);
	}

	// detach
	public function detach(\SplObserver $observer) {

		if(!$this->storage->contains($observer)) 
			return;

		$this->storage->detach($observer);
	}

	// notify
	public function notify() {
		// check storage > 0
		if(!count($this->storage)) {
			return;
		}

		// call the update
		foreach($this->storage as $observer) {
			$observer->update($this);
		}
	}

}