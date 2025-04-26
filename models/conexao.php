<?php
$db = new PDO('sqlite:' . __DIR__ . '/../database.sqlite');

// Verifica se já existe a tabela 'user'
$query = $db->query("SELECT name FROM sqlite_master WHERE type='table' AND name='user';");

if ($query->fetch() === false) {
    // Se não existe a tabela, cria todas
    $path_sql = __DIR__ . '/../create_tables.sql';
    $sql = file_get_contents($path_sql);

    if (!$sql) {
        die('Erro ao ler o arquivo create_tables.sql');
    }

    $db->exec($sql);
}

return $db;
?>
