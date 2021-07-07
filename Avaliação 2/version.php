<?php

    try{
        
        $accessJSON = file_get_contents('resources/DBAccess.json');
        $access = json_decode($accessJSON);

        $dsn = "mysql:host=".$access->host.";dbname=".$access->dbname;
        $user = $access->user;
        $passwd = $access->password;

        $pdo = new PDO($dsn, $user, $passwd);

        $stm = $pdo->query("SELECT * FROM Aluno");

        $alunos = $stm->fetchAll();

        foreach($alunos as $aluno){
            echo $aluno;
        }

    } catch(Exeption $e) {
        echo $e;
    }
    
?>