<?php

$host = getenv('db_host');
$port = getenv('db_post');
$dbname = getenv('db_name');
$user = getenv('db_user');
$password = getenv('db_pass');

try {
    $base = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();

}

?>