<?php
// Include config
require('config.php');
// Include controller
require('classes/Bootstrap.php');
require('classes/Controller.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller) {
    $controller->executeAtion();
}