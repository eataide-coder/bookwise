<?php

    $controller = parse_url($_SERVER["REQUEST_URI"])["path"];

    $controller = str_replace("/", "", $controller);

    if (!$controller) {

        $controller = "index";
    }

    if (! file_exists("controller/{$controller}.controller.php")) {

        abort(404);
    }

    require "controller/{$controller}.controller.php";

