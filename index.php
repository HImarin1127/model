<?php
session_start();

$controller = isset($_GET['c']) ? $_GET['c'] : 'login';
$method = isset($_GET['m']) ? $_GET['m'] : 'index';

$controllerFile = __DIR__ . "/application/controllers/" . ucfirst($controller) . "Controller.php";
if (!file_exists($controllerFile)) {
    http_response_code(404);
    echo "Controller not found";
    exit;
}
require_once $controllerFile;
$class = ucfirst($controller) . 'Controller';
$object = new $class();
if (!method_exists($object, $method)) {
    http_response_code(404);
    echo "Method not found";
    exit;
}
$object->$method();
