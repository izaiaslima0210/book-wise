<?php

if(!isset($_REQUEST['id'])) {
  http_response_code(404);
  require 'controllers/404.controller.php';
  die();
}

$livro = (new Dados)->getLivros($_REQUEST['id']);

  view('livro', array('livro'=> $livro));
  
?>