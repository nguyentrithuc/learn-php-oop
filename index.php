<?php
// Include config
require('config.php');
// Include classes
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');
// Include controllers
require('controllers/home.php');
require('controllers/users.php');
require('controllers/shares.php');
// Include model
require('models/home.php');
require('models/share.php');
require('models/user.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller) {
    $controller->executeAction();
}