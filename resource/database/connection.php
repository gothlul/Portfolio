<?php

    require_once "variables.php";

    try {
        $base = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();

    }

?>