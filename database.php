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

    public function getLivro($id)
    {
        if (!empty($id)) {
            $query = "SELECT * FROM book WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $item = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$item) {
                return null;
            }
            if ($item) {
               return Livro::make($item);
            }
            return null;
        }
    }

    public function getLivros($pesquisa = null)
    {
        if ($pesquisa) {
            $query = "SELECT * FROM book WHERE title LIKE :pesquisa OR author LIKE :pesquisa";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':pesquisa', '%' . $pesquisa . '%');
            $stmt->execute();
            $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (!$items) {
                return null;
            }
            $this->livros = array_map(fn($item) => Livro::make($item), $items);
            return $this->livros;
        }
    
        
        $query = "SELECT * FROM book";
        $items = $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
        $this->livros = array_map(fn($item) => Livro::make($item), $items);

        return $this->livros;
    }
}