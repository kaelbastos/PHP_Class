<?php
$students = [];
$nomeArquivo = 'C:\Users\kaelb\Documents\PHP\Avaliação 1\resources\students.json';

if (file_exists($nomeArquivo)) {
    $studentsJSON = file_get_contents($nomeArquivo);
    $students = json_decode($studentsJSON, true);
} else {
    
    $students = [];

    if( !str_contains($_SERVER['REQUEST_URI'], 'Principal')){
        header("Location: Principal.php");
        die("Arquivo Não encontrado;");
    } else {
        echo "<br><h2> Arquivo não encontrado!!! Leia o README.md</h2><br>";
    }
}
?>