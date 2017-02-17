<?php

require_once('load.php');

$car_model = new CarModel(2017);
$car_model->attach(new CarModelObserver);
//...
$car_model->notify();

$car_model_1 = new CarModel(2016);
$car_model_1->attach(new CarModelObserver);
//...
$car_model_1->notify();