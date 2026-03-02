<?php


$view = "index";

if($uri = str_replace('/','',$_SERVER['REQUEST_URI'])){
    $view = $uri;
} 

require "../viewer/templates/app.view.php";