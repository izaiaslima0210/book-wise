<?php
require 'conexao.php';
require 'models/livro.model.php';


class Dados
{
  private $db;
  public $livros;
    public function __construct()
    {
        $this->db = Conexao::getInstance();
    }

    public function query($query, $class, $params = [])
    {
        $stmt = $this->db->prepare($query);
        if($class) {
            $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        $stmt->execute($params);
        return $stmt;
    }
}