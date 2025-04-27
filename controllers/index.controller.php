<?php
$livros = (new Dados)->getLivros($_REQUEST['pesquisar'] ?? null);
  view('index', array('livros'=> $livros));
?>