<?php
    try {
        $dsn = "mysql:host=localhost:3306;dbname=prova2DB";
        $user = "root";
        $passwd = "admin";

        return $pdo = new PDO($dsn, $user, $passwd);     

    } catch (Exeption $e) {
        echo $e;
    }
?>