<?php

Router::parseExtensions('json');

// Administration routes
Router::connect('/manager', array(
	'plugin' => 'tree_of_savior', 'controller' => 'dashboards', 'action' => 'index'
));
Router::connect('/manager/**', array(
	'plugin' => 'tree_of_savior', 'controller' => 'dashboards', 'action' => 'index'
));

// Public
Router::connect('/', array(
	'plugin' => 'tree_of_savior', 'controller' => 'maps', 'action' => 'index'
));
