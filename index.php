<?php
require_once 'config/Config.php';
require_once 'config/Database.php';
require_once 'config/Session.php';
require_once 'config/Helper.php';
require_once 'models/User.php';

Session::start();

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';
$parts = explode('/', $url);

$controllerName = ucfirst($parts[0]) . 'Controller';
$methodName = $parts[1] ?? 'index';

$controllerPath = 'controllers/' . $controllerName . '.php';

if (file_exists($controllerPath)) {
    require_once $controllerPath;
    $controller = new $controllerName();
    
    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    } else {
        die("404 - Method not found");
    }
} else {
    die("404 - Controller not found");
}