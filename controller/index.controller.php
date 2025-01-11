<?php 

$livros = (new Db())->livros();

view("index", compact("livros"));