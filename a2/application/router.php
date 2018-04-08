<?php

//access to subclasses
//require_once 'application/load.class.php';
//require_once 'application/models/model.class.php';
//require_once 'application/models/user.class.php';
//require_once 'application/controllers/controller.class.php';

function myLoad($class) {

    $controllers = 'application/controllers/' . strtolower($class) . '.class.php';
    $models = 'application/models/' . strtolower($class) . '.class.php';
	$load = 'application/load/' . strtolower($class) . '.class.php';
    $rout = 'application/'. strtolower($class) . '.class.php';
	
	

	if (file_exists($controllers)) {
   		require_once $controllers;
	}	
	elseif (file_exists($models)) {
		require_once $models;
	}
	
	elseif (file_exists($load)) {
		require_once $load;
	}
	
	elseif (file_exists($rout)) {
		require_once $rout;
}	
		
}


spl_autoload_register('myLoad');


new Controller();


?>