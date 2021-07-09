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
            if ($operacao != "delete") {
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

    if (!empty($errOperacao) || !empty($errCpf)){
        header("Location: ./Erro.php/?erro=" . urlencode($errCpf.$errOperacao));
        die();
    } 

    $alunos = include_once $_SERVER['DOCUMENT_ROOT'] . "/PHP/Avaliação 2/PDOs/getAlunos.php";

    if (!array_key_exists($cpf, $alunos)){
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
    <title>Delete</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    
    <?php include "resources/Header.php";?>

    <div class='content'>
        <br><br>
        <form action="Process.php" method="post">
            <fieldset>
                <legend>Deletar Aluno</legend>
                 <div>
                    <label for="cpfAluno">Deseja Excluir o Aluno: <strong><?php echo $aluno->getNome() ?></strong>? </label>
                    <div>
                        <input type="hidden" name="cpfAluno" class="form-input" id="cpfAluno" value=<?php echo '"'.$aluno->getCPF().'"'; ?>  required>
                    </div>
                </div>

                <br><br>

                <div class="buttons multiple">

                     <div class="submitButton">
                         <a href="Home.php"><button type="button" class="oposite btn">Voltar</button></a>
                    </div>
                    
                    <div class="submitButton">
                        <button type="submit" name="operacao" value="delete" class="btn">Deletar</button>
                    </div>
                </div>
            </fieldset>
        </form>
        <br><br>
    </div>

    <?php include "resources/Footer.php";?>

</body>
</html>