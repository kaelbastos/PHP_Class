<?php

$operacao = $nome = $curso = $periodo = $cpf = $telefone = $dataIngresso = $observacoes = "";
$errOperacao = $errNome = $errCurso = $errPeriodo = $errCpf = $errTelefone = $errDataIngresso = "";

function testInput($data)
{ //validação de segurança para evitar paramPollution 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if (isset($_REQUEST["btnOperacao"])) {
    if (!empty($_REQUEST["btnOperacao"])) {
        $operacao = testInput($_REQUEST["btnOperacao"]);
        if ($operacao != "Adicionar" && $operacao != "Alterar" && $operacao != "Deletar") {
            $errOperacao = "Operação não possível";
        }
    } else {
        $errOperacao = "Operação vazia;";
    }
} else {
    $errOperacao = "Operação não definida;";
}

if (isset($_REQUEST["txtNome"])) {
    if (!empty($_REQUEST["txtNome"])) {
        $nome = testInput($_REQUEST["txtNome"]);
    } else {
        $errNome = "Nome vazio;";
    }
} else {
    $errNome = "Nome não definido;";
}

if (isset($_REQUEST["radCurso"])) {
    if (!empty($_REQUEST["radCurso"])) {
        $curso = testInput($_REQUEST["radCurso"]);
    } else {
        $errCurso = "Curso vazio;";
    }
} else {
    $errCurso = "Curso não definido;";
}


if (isset($_REQUEST["slctPeriodo"])) {
    if (!empty($_REQUEST["slctPeriodo"])) {
        $periodo = testInput($_REQUEST["slctPeriodo"]);
    } else {
        $errPeriodo = "Periodo vazio;";
    }
} else {
    $errPeriodo = "Periodo não definido;";
}

if (isset($_REQUEST["cpfAluno"])) {
    if (!empty($_REQUEST["cpfAluno"])) {
        $cpf = testInput($_REQUEST["cpfAluno"]);
    } else {
        $errCpf = "CPF vazio;";
    }
} else {
    $errCpf = "CPF não definido;";
}

if (isset($_REQUEST["txtTelefone"])) {
    if (!empty($_REQUEST["txtTelefone"])) {
        $telefone = testInput($_REQUEST["txtTelefone"]);
    } else {
        $errTelefone = "Telefone vazio;";
    }
} else {
    $errTelefone = "Telefone não definido;";
}

if (isset($_REQUEST["txtDataIngresso"])) {
    if (!empty($_REQUEST["txtDataIngresso"])) {
        $dataIngresso = testInput($_REQUEST["txtDataIngresso"]);
    } else {
        $errDataIngresso = "Data de Ingresso vazia;";
    }
} else {
    $errDataIngresso = "Data de Ingresso não definida;";
}

if (isset($_REQUEST["txtObservacao"])) {
    if (!empty($_REQUEST["txtObservacao"])) {
        $observacoes = testInput($_REQUEST["txtObservacao"]);
    }
}

//Validação dos erros

if (!(empty($errOperacao) &&
    empty($errNome) &&
    empty($errCurso) &&
    empty($errPeriodo) &&
    empty($errCpf) &&
    empty($errTelefone) &&
    empty($errDataIngresso))) {

    header("Location: Principal.php");
    die($errOperacao + "<br>" + $errNome + "<br>" + $errCurso + "<br>" + $errPeriodo + "<br>" + $errCpf + "<br>" + $errTelefone + "<br>" + $errDataIngresso);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="/Avaliação 1/resources/css/style.css">
    <link rel="stylesheet" href="/Avaliação 1/resources/css/formDivStyle.css">
</head>

<body class="principal_body">

    <?php include "resources/cabecalho.php"; ?>

    <div class="content">
        <form name="form" method="POST" action="/Avaliação 1/process.php">
        <div>
                <div>
                    <label for="txtNome">Nome:</label>
                    <div>
                        <input type="text" class="form-input" name="txtNome" id="txtNome" placeholder="Nome do aluno" value=<?=$nome ?> required>
                    </div>
                </div>
                <br>
                <div>
                    <label for="radio saction">Curso:</label>
                </div>
                <div class="radio section" id="radio section">
                    <input class="form-radios" type="radio" name="radCurso" id="radio1" value="ADS" <?=($curso == "ADS") ? "checked" : "" ?>>
                    <label class="form-radios-label" for="radio1">
                        Análise de sistemas
                    </label>
                    <input class="form-radios" type="radio" name="radCurso" id="radio2" value="TPG" <?=($curso == "TPG") ? "checked" : "" ?>>
                    <label class="form-radios-label" for="radio2">
                        Processos gerenciais
                    </label>
                    <input class="form-radios" type="radio" name="radCurso" id="radio3" value="TMA" <?=($curso == "TMA") ? "checked" : "" ?>>
                    <label class="form-radios-label" for="radio3">
                        Manutenção de aeronaves
                    </label>
                </div>
                <br>
                <div>
                    <label for="slctPeriodo">Período:</label>
                </div>
                <select name="slctPeriodo" id="slctPeriodo">
                    <option value="Matutino" <?=($periodo == "Matutino") ? "selected" : "" ?>>Matutino</option>
                    <option value="Noturno" <?=($periodo == "Noturno") ? "selected" : "" ?>>Noturno</option>
                </select>
                <br><br>
                <div>
                    <label for="cpfAluno">CPF:</label>
                    <div>
                        <input type="text" name="cpfAluno" class="form-input" id="cpfAluno" placeholder="000.000.000/00" value=<?=$cpf ?> readonly required>
                    </div>
                </div>
                <br>
                <div>
                    <label for="txtTelefone">Telefone:</label>
                    <div>
                        <input type="text" name="txtTelefone" class="form-input" id="txtTelefone" placeholder="(00) 0000-0000" value=<?=$telefone ?> required>
                    </div>
                </div>
                <br>
                <div>
                    <label for="dataIngresso">Data de Ingresso:</label>
                    <div>
                        <input type="text" name="txtDataIngresso" class="form-input" placeholder="mm/dd/aaaa" value=<?=$dataIngresso ?> required>
                    </div>
                </div>
                <br>
                <div>
                    <label for="txtObservacao">Observação:</label>
                    <div>
                        <input type="textArea" name="txtObservacao" class="form-input" id="txtObservacao" placeholder="Observação" value=<?=$observacoes ?>>
                    </div>
                </div>
                <br><br>
                <div>
                    <div class="submitButton">
                        <button type="submit" name="btnOperacao" value="Alterar" class="btn">Alterar</button>
                    </div>
                </div>
        </form>
    </div>

    <?php include "resources/rodape.php"; ?>


</body>

</html>