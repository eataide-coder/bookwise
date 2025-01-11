<?php

$livros = (new Db())->livros();

$id = $_REQUEST["id"];

$filtrado = array_filter($livros, fn($l) => $l->id == $id);

$livro = array_pop($filtrado);

view("livro", compact("livro"));