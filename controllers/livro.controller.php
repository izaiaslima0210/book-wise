<?php
require 'dados.php';

  if(!isset($_REQUEST['id'])) {
    http_response_code(404);
    require 'controllers/404.controller.php';
    die();
  }

  $livroBusca = array_filter($livros, fn($livroFiltro) => $livroFiltro['id'] == $_REQUEST['id']);
  $livro = array_pop($livroBusca);

  view('livro', array('livro'=> $livro));
  
?>