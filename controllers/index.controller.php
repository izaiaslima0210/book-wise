<?php
$db = new Dados();
$livros = $db->getLivros();
  view('index', array('livros'=> $livros));
?>