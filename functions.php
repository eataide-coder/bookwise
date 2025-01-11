<?php

function view($view, $dados = []){

    foreach ($dados as $key => $value) {

        $$key = $value;
    }
    require "views/template/app.php";
}

function dd(... $value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function abort($code){
    http_response_code($code);
    view($code);
    exit;
}

