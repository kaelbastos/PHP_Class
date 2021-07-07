<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <fieldset>
            <legend>Gerenciamento de Alunos</legend>
            <table>
                <tr>
                    <?php $headsList = array("Nome", "Matrícula", "Idade", "Curso","Grade", "IRA", "Action");

                    foreach($headsList as $head){
                        echo "<th>$head</th>";
                    }
                                        
                    ?>
                </tr>
                <?php 
                    $alunos = include_once($_SERVER['DOCUMENT_ROOT']."/PHP/Avaliação 2/PDOs/getAlunos.php");

                
                    $processPath = $_SERVER["DOCUMENT_ROOT"]."/PHP/Avaliação 2/Process.php";

                    foreach($alunos as $aluno){
                        echo '<tr>';

                            echo '<td>'.$aluno->getNome().'</td>';
                            echo '<td>' . $aluno->getMatricula() . '</td>';
                            echo '<td>' . $aluno->getIdade() . '</td>';
                            echo '<td>' . $aluno->getCurso() . '</td>';
                            echo '<td>' . $aluno->getGrade() . '</td>';
                            echo '<td>' . $aluno->getIra() . '</td>';
                            echo '<td>
                                    <div class="inlineContent">
                                        <form action="Edit.php" method="POST">
                                            <input type="hidden" name="cpf" value='.$aluno->getCpf().'>
                                            <button type="submit" name="operacao" value="update" class="tableButton">
                                                <img src="/PHP/Avaliação 2/resources/edit-icon.png" alt="edit" class="tableImg">
                                            </button>
                                        </form>
                                        <form action="Delete.php" method="POST">
                                            <input type="hidden" name="cpf" value='.$aluno->getCpf().'>
                                            <button type="submit" name="operacao" value="delete" class="tableButton">
                                                <img src="/PHP/Avaliação 2/resources/erase.webp" alt="erase" class="tableImg">
                                            </button>
                                        </form>                           
                                    </div>
                                </td>';
                            

                        echo '</tr>';

                    }
                    
                ?>
            </table>
        
        
        
        </fieldset>
    </div>
</body>
</html>