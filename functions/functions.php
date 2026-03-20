<?php
function dd(...$dump)
{
    dump($dump);
    die();
};

function dump($dump)
{
    echo "<pre>";
    var_dump($dump);
    echo "<pre/>";
};

function view($view, $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }
    if ($_SESSION['auth']) {
        require "../viewer/partial/main.view.php";
    }
    if (!isset($_SESSION['auth'])) {
        require "../viewer/templates/app.view.php";
    }
}

function abort($code)
{

    http_response_code($code);
    view($code);
    die();
}
function flash()
{
    return new Flash;
}

function config($key = null)
{
    $config = require "../config.php";

    if ($config > 0) {
        return $config[$key];
    }
    return $config;
}

function auth()
{
    if (!isset($_SESSION['auth'])) {
        header("location: /login");
        exit();
    }
    return $_SESSION['auth'];
}
