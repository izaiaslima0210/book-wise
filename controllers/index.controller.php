<?php
  // require 'dados.php';
  require 'models/dados.php';
  view('index', array('livros'=> $livros));
?>