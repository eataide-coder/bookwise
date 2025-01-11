<?php


class Livro
{
    public $id;
    public $titulo;
    public $descricao;
    public $autor;

    public static function make($item)
    {
        $livro = new Livro();
        $livro->id = $item['id'];
        $livro->titulo = $item['titulo'];
        $livro->descricao = $item['descricao'];
        $livro->autor = $item['autor'];

        return $livro;
        
    }
}