<?php

class Db
{
    private $db;

    public function __construct()
    {
        $this->db  = new PDO('sqlite:database.sqlite');

    }

    public function livros()
    {
        
        $query = $this->db->query("SELECT * FROM livros");

        $itens = $query->fetchAll();

        return array_map(fn($item) => Livro::make($item), $itens);
    }
}
