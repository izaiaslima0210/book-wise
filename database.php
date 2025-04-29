<?php
require 'conexao.php';
require 'models/livro.model.php';


class Dados
{
  private $db;
  public $livros;
  private $database;
    public function __construct()
    {
        $config = require 'config.php';
        $this->database = $config['database']['driver'] . ':' . $config['database']['database'];
        $this->db = Conexao::getInstance($this->database);
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