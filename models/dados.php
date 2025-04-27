<?php
require 'conexao.php';

class Dados
{
  private $db;
  public $livros;
    public function __construct()
    {
        $this->db = Conexao::getInstance();
    }

    public function getLivros()
    {
        $query = "SELECT * FROM book";
        $livros = $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
        return $livros;
    }
}
?>