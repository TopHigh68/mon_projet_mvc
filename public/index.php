<?php
require_once '../core/Router.php';
require_once '../core/Controller.php';
require_once '../core/Model.php';
require_once '../config/config.php';

$router = new Router();
$router->dispatch();