<?php
  
        require $_SERVER['DOCUMENT_ROOT']."/PHP/Avaliação 2/Aluno.php";
        $pdo = require("stablishConnectionAlunos.php");

        $stm = $pdo->query("SELECT * FROM Aluno");

        $alunos = $stm->fetchAll();
        $listaAlunos = [];

        foreach($alunos as $aluno){
            $cpf = $aluno['cpf'];
            $nome = $aluno['nome'];
            $matricula = $aluno['matricula'];
            $idade = $aluno['idade'];
            $curso = $aluno['curso'];
            $grade = $aluno['grade'];
            $ira = $aluno['ira'];

            $listaAlunos[$cpf] = new Aluno($cpf, $nome, $matricula, $idade, $curso, $grade, $ira);
        }

        return $listaAlunos ;

?>