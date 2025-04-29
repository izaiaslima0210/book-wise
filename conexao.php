<?php

class Conexao {
    private static $instance = null;

    public static function getInstance($database)
    {
        if (self::$instance === null) {
            self::$instance = new PDO($database);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        $query = self::$instance->query("SELECT name FROM sqlite_master WHERE type='table' AND name='user';");
        if ($query->fetch() === false) {
            // Se não existe a tabela, cria todas
            $path_sql = __DIR__ . '/create_tables.sql';
            $sql = file_get_contents($path_sql);

            if (!$sql) {
                die('Erro ao ler o arquivo create_tables.sql');
            }

            self::$instance->exec($sql);
        }

        return self::$instance;
    }  
}

new Conexao();      
