<?php
try {
    require "../Aluno.php";
    $pdo = require "stablishConnectionAlunos.php";

    $stm = $pdo->query("SELECT * FROM Aluno");

    $alunos = $stm->fetchAll();

    return $alunos;

} catch (Exeption $e) {
    echo $e;
}
