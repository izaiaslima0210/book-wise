<?php
$pesquisa = $_REQUEST['pesquisar'] ?? '';
$query = "SELECT id, title, description, author, cover_image as image, rating FROM book WHERE title LIKE :pesquisa OR author LIKE :pesquisa";
$livros = (new Dados)->query(
  query: $query, 
  class: Livro::class, 
  params: [':pesquisa' => '%' . $pesquisa . '%'])
  ->fetchAll();

view('index', array('livros'=> $livros));
?>