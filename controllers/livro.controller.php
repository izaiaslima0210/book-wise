<?php

if(!isset($_REQUEST['id'])) {
  http_response_code(404);
  require 'controllers/404.controller.php';
  die();
}

$query = "SELECT id, title, `description`, author, cover_image as image, rating  FROM book WHERE id = :id";
$livro = (new Dados)->query(
  query: $query, 
  class: Livro::class, 
  params: [':id' => $_REQUEST['id']])->fetch();
  view('livro', array('livro'=> $livro));
  
?>