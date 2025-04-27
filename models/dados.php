<?php
require 'conexao.php';

class Livro 
{
    public $id;
    public $title;
    public $author;
    public $description;
    public $image;
    public $rating;

    public static function make ($item) {
        $livro = new self();
        $livro->id = $item['id'];
        $livro->title = $item['title'];
        $livro->author = $item['author'];
        $livro->description = $item['description'];
        $livro->image = $item['cover_image'];
        $livro->rating = $item['rating'];
        return $livro;
    }

}

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

    public function getLivros()
    {
        
        $query = "SELECT * FROM book";
        $items = $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
        foreach ($items as $item) {
            $livro = Livro::make($item);
            $this->livros[] = $livro;
        }

        return $this->livros;
    }
}
?>