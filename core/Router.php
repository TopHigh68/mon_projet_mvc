<?php

class Router {
    public function dispatch() {
        $url = $_GET['url'] ?? 'home/index';
        $url = explode('/', trim($url, '/'));

        $controllerName = ucfirst($url[0]) . 'Controller';
        $method = $url[1] ?? 'index';

        require_once "../app/controllers/$controllerName.php";
        $controller = new $controllerName;

        if (method_exists($controller, $method)) {
            $controller->$method();
        } else {
            echo "Méthode introuvable.";
        }
    }
}