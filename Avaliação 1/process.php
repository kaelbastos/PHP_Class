<?php $students = []; ?>
<?php include "resources/getStudents.php"; ?>

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

function save($array)
{
    $studentsJSON = json_encode($array);
    file_put_contents('C:\Users\kaelb\Documents\PHP\Avaliação 1\resources\students.json', $studentsJSON);
    header("Location: Principal.php");
    die("Alterações salvas");
}


if ($operacao == "Adicionar") {
    if (array_key_exists($cpf, $students)) {
        header("Location: Principal.php");
        die("Aluno já cadastrado");
    }
    $aluno = array(
        "nome" => $nome,
        "curso" => $curso,
        "periodo"  => $periodo,
        "cpf" => $cpf,
        "telefone" => $telefone,
        "dataIngresso" => $dataIngresso,
        "observacoes" => $observacoes
    );
    $students[$cpf] = $aluno;
    save($students);
}
if ($operacao == "Alterar") {
    if (!array_key_exists($cpf, $students)) {
        header("Location: Principal.php");
        die("Aluno não cadastrado");
    }

    $aluno = array(
        "nome" => $nome,
        "curso" => $curso,
        "periodo"  => $periodo,
        "cpf" => $cpf,
        "telefone" => $telefone,
        "dataIngresso" => $dataIngresso,
        "observacoes" => $observacoes
    );
    $students[$cpf] = $aluno;
    save($students);
}

if ($operacao == "Deletar") {
    if (!array_key_exists($cpf, $students)) {
        header("Location: Principal.php");
        die("Aluno não cadastrado");
    }

    unset($students[$cpf]);
    save($students);
}

save($students);
?>