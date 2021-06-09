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
    <title>Delete</title>
    <link rel="stylesheet" href="/Avaliação 1/resources/css/style.css">
</head>

<body class="body">

    <?php include "resources/cabecalho.php"; ?>
    <div>
        <div class="centerContent">
            <p><strong>Deseja confirmar a Exclusão do aluno <?php echo $nome; ?> </strong></p>
        </div>
        
        <form action="/Avaliação 1/process.php" method="post">
            <input type="hidden" name="txtNome" value=<?=$nome ?> required>
            <input type="hidden" name="radCurso" value=<?=$curso ?> required>
            <input type="hidden" name="slctPeriodo" value=<?=$periodo ?> required>
            <input type="hidden" name="cpfAluno" value=<?=$cpf ?> required>
            <input type="hidden" name="txtTelefone" value=<?=$telefone ?> required>
            <input type="hidden" name="txtDataIngresso" value=<?=$dataIngresso ?> required>
            <input type="hidden" name="txtObservacao" value=<?=$observacoes ?>>
            <div class="submitButton">
                <button type="submit" name="btnOperacao" value="Deletar" class="btn">Deletar</button>
                <button class="btn"><a href="/Avaliação 1/Principal.php">Voltar</a></button>
            </div>
        </form>

    </div>

    <?php include "resources/rodape.php"; ?>


</body>

</html>