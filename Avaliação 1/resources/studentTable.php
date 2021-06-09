<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Avaliação 1/resources/css/style.css">
    <style>
        table{
            border-collapse: collapse;

        }

        legend{
            margin-top: 10px;
            text-align: center;
        }
        .table {
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid;
        }

        th{
            border: 1px solid;
            background-color: darkolivegreen;
            padding: 2px;
            padding-left: 15px;
            padding-right: 15px;
            
        }

        td{
            border: 1px solid;
            margin: 0;
            padding-left: 5px;
            padding-right: 5px;
        }

        tr{
            text-align: center;
            justify-items: center;
            align-self: center;
        }

        hr {
            margin-top: 20px;
            width: 90%;
        }

        tr a:link{
            color: whitesmoke;
        }

        tr a:visited{
            color: whitesmoke;
        }

        tr a:hover{
            color:forestgreen;
        }
    </style>
</head>

<body class="content">
    <?php $students = []; ?>
    <?php include "getStudents.php"; ?>
    <?php
    echo "<legend><h3>Alunos</h3></legend>
        <table class='table'>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Curso</th>
                <th>Periodo</th>
                <th>Data de Ingresso</th>
                <th>Telefone</th>
                <th>Observações</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>";
    ?>

    <?php 
    foreach ($students as $student) { 
        echo "<tr>
            <td>".$student["cpf"]."</td>
            <td>".$student["nome"]."</td>
            <td>".$student["curso"]."</td>
            <td>".$student["periodo"]."</td>
            <td>".$student["dataIngresso"]."</td>
            <td>".$student["telefone"]."</td>
            <td>".$student["observacoes"]."</td>
            <td><a href='Alter.php/?txtNome=".$student["nome"]."&radCurso=".$student["curso"]."&slctPeriodo=".$student["periodo"]."&cpfAluno=".$student["cpf"]."&txtTelefone=".$student["telefone"]."&txtDataIngresso=".$student["dataIngresso"]."&txtObservacao=".$student["observacoes"]."&btnOperacao=Alterar'>Alterar</a></td>
            <td><a href='Delete.php/?txtNome=".$student["nome"]."&radCurso=".$student["curso"]."&slctPeriodo=".$student["periodo"]."&cpfAluno=".$student["cpf"]."&txtTelefone=".$student["telefone"]."&txtDataIngresso=".$student["dataIngresso"]."&txtObservacao=".$student["observacoes"]."&btnOperacao=Deletar'>Excluir</a></td>
        </tr>";
      }; 
      
      echo "</table>";
      ?>
    
    <hr>
</body>

</html>

