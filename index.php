<?php
require 'config/config.php';
require 'vendor/autoload.php';
require 'app/core/Core.php';

$core = new Core();
$core->run();

	// echo $core->getController(). "\n\n";
	// echo $core->getMethod() . "\n\n";
	// print_r($core->getParameters());
