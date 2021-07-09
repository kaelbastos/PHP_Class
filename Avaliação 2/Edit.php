<?php

    function testInput($data) { //validação de segurança para evitar paramPollution
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $operacao = $cpf = "";
    $errOperacao = $errCpf = "";

    if (isset($_REQUEST["operacao"])) {
        if (!empty($_REQUEST["operacao"])) {
            $operacao = testInput($_REQUEST["operacao"]);
            if ($operacao != "update") {
                $errOperacao = "Operação não possível";
            }
        } else {
            $errOperacao = "Operação vazia;";
        }
    } else {
        $errOperacao = "Operação não definida;";
    }

    if (isset($_REQUEST["cpf"])) {
        if (!empty($_REQUEST["cpf"])) {
            $cpf = testInput($_REQUEST["cpf"]);
        } else {
            $errCpf = "Cpf vazio;";
        }
    } else {
        $errCpf = "Cpf não definido;";
    }

    if (!empty($errOperacao) || !empty($errCpf)) {
        header("Location: ./Erro.php/?erro=" . urlencode($errCpf . $errOperacao));
        die();
    }

    $alunos = include_once $_SERVER['DOCUMENT_ROOT'] . "/PHP/Avaliação 2/PDOs/getAlunos.php";

    if (!array_key_exists($cpf, $alunos)) {
        header("Location: ./Erro.php/?erro=" . urlencode("Cpf não cadastrado!"));
        die();
    }

    $aluno = $alunos[$cpf]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    
    <?php include "resources/Header.php";?>

    <div class='content'>
        <br><br>
        <form action="Process.php" method="post">
            <fieldset>
                <legend>Editar Aluno</legend>
                 <div>
                    <label for="cpfAluno">CPF:</label>
                    <div>
                        <input type="text" name="cpfAluno" class="form-input" id="cpfAluno" value=<?php echo '"'.$aluno->getCPF().'"'; ?> readonly required>
                    </div>
                </div>

                <br>

                <div>
                    <label for="txtNome">Nome:</label>
                    <div>
                        <input type="text" class="form-input" name="txtNome" id="txtNome" value=<?php echo "'".$aluno->getNome()."'"; ?> required>
                    </div>
                </div>

                <br>

                <div>
                    <label for="txtMatricula">Matricula:</label>
                    <div>
                        <input type="text" name="txtMatricula" class="form-input" id="txtMatricula" value=<?php echo '"'.$aluno->getMatricula().'"'; ?> readonly required>
                    </div>
                </div>

                <br>

                <div>
                    <label for="nmbIdade">Idade:</label>
                    <div>
                        <input type="number" name="nmbIdade" class="form-input" min=0 max=100 value=<?php echo "'".$aluno->getIdade()."'"; ?> required>
                    </div>
                </div>

                <br>

                <div>
                    <label for="radio-sectionn">Curso:</label>
                </div>
                
                <div class="radio-section" id="radio-section">
                    <?php
                        $curso = $aluno->getCurso();
                    ?>
                    <div>
                        <input class="form-radios" type="radio" name="radCurso" id="radio1" value="ADS" <?=($curso == "ADS") ? "checked" : "" ?> >
                        <label class="form-radios-label" for="radio1">
                            Análise de sistemas
                        </label>
                    </div>

                    <div>
                        <input class="form-radios" type="radio" name="radCurso" id="radio2" value="TPG" <?=($curso == "TPG") ? "checked" : "" ?> >
                        <label class="form-radios-label" for="radio2">
                            Processos gerenciais
                        </label>
                    </div>

                    <div>
                        <input class="form-radios" type="radio" name="radCurso" id="radio3" value="TMA" <?=($curso == "TMA") ? "checked" : "" ?> >
                        <label class="form-radios-label" for="radio3">
                            Manutenção de aeronaves
                        </label>
                    </div>  
                </div>

                <br>

                <div>
                    <label for="slctGrade">Grade:</label>
                </div>
                <?php
                    $grade = $aluno -> getGrade();
                ?>
                <select name="slctGrade" id="slctGrade">
                    <option value="2008" <?=($grade == "2008") ? "selected" : "" ?> >2008</option>
                    <option value="2018" <?=($grade == "2018") ? "selected" : "" ?> >2018</option>
                </select>

                <br><br>

                <div>
                    <label for="nmbIra">IRA:</label>
                    <div>
                        <input type="number" name="nmbIra" class="form-input" min=0 max=10 step=0.01 value=<?php echo "'".$aluno->getIra()."'"; ?> required>
                    </div>
                </div>

                <br><br>

                <div class="buttons multiple">

                     <div class="submitButton">
                         <a href="Home.php"><button type="button" class="oposite btn">Voltar</button></a>
                    </div>
                    
                    <div class="submitButton">
                        <button type="submit" name="operacao" value="update" class="btn">Editar</button>
                    </div>
                </div>
            </fieldset>
        </form>
        <br><br>
    </div>

    <?php include "resources/Footer.php";?>

</body>
</html>