<?php

function carregarController()
{

    $controller = "index";

    if (isset($_SERVER["PATH_INFO"])) {
        $controller = str_replace("/", "", $_SERVER["PATH_INFO"]);
    };

    if (!file_exists("controller/{$controller}.controller.php")) {

        http_response_code(404);

        require "views/error.view.php";

        exit;
    }

    require "controller/{$controller}.controller.php";
}

carregarController();
