<?php
session_start();

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

if (!$controller) {
    $controller = 'login';
}
$publicRoutes = ['login'];


if (!isset($_SESSION['auth']) && !in_array($controller, $publicRoutes)) {
    header("Location: /login");
    exit();
}


if (isset($_SESSION['auth']) && $controller === 'login') {
    header("Location: /home");
    exit();
}


if (!file_exists("../controllers/{$controller}.controller.php")) {
    abort(404);
}


require "../controllers/{$controller}.controller.php";