<?php
$livros = (new Dados)->getLivros();
  view('index', array('livros'=> $livros));
?>