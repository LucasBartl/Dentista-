<?php

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
