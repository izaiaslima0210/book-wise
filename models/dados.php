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

}

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
        $items = $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
        foreach ($items as $item) {
            $livro = new Livro();
            $livro->id = $item['id'];
            $livro->title = $item['title'];
            $livro->author = $item['author'];
            $livro->description = $item['description'];
            $livro->image = $item['cover_image'];
            $livro->rating = $item['rating'];
            $this->livros[] = $livro;
        }

        return $this->livros;
    }
}
?>