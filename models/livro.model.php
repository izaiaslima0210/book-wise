<?php

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
?>