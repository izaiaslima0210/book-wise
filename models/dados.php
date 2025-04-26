<?php
require_once 'conexao.php';
$query = "SELECT * FROM book";
$livros = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);

?>