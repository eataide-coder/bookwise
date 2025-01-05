<?php

require "dados.php";

$id = $_REQUEST["id"];

$filtrado = array_filter($liuvos, function ($livro) use ($id) {
    return $livro["id"] == $id;
});

$livro = array_pop($filtrado);

$view = "livro";

require "views/template/app.php";