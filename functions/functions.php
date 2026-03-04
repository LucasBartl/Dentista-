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

function view($view)
{

    require "../viewer/templates/app.view.php";
}

function abort($code)
{

    http_response_code($code);
    view($code);
    die();
}
function flash(){
    return new Flash;
}
function config($key =null ) 
{
    $config = require "../config.php";

    if($config > 0 ){
        return $config[$key];
    }
    return $config;
}
