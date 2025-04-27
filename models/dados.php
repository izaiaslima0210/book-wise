<?php
require_once 'conexao.php';

$db = Conexao::getInstance();
$query = "SELECT * FROM book";
$livros = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);

?>