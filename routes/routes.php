<?php
session_start();

$timeout = 1800;

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

if (!$controller) {
    $controller = 'login';
}

$publicRoutes = ['login'];


if (isset($_SESSION['auth'])) {

    if (isset($_SESSION['last_activity']) &&
        (time() - $_SESSION['last_activity']) > $timeout) {

        session_unset();
        session_destroy();

        header("Location: /login");
        exit();
    }
    $_SESSION['last_activity'] = time();
}


if (!isset($_SESSION['auth']) && !in_array($controller, $publicRoutes)) {
    header("Location: /login");
    exit();
}


if (isset($_SESSION['auth']) && $controller === 'login') {
    header("Location: /appointments");
    exit();
}


if (!file_exists("../controllers/{$controller}.controller.php")) {
    abort(404);
}

require "../controllers/{$controller}.controller.php";