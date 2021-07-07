<?php
    
    function testInput($data){ //validação de segurança para evitar paramPollution
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_REQUEST["operacao"])) {
        if (!empty($_REQUEST["operacao"])) {
            $operacao = testInput($_REQUEST["operacao"]);
            if ($operacao != "include" && $operacao != "edit" && $operacao != "delete") {
                $errOperacao = "Operação não possível";
            }
        } else {
            $errOperacao = "Operação vazia;";
        }
    } else {
        $errOperacao = "Operação não definida;";
    }

    echo $operacao;
?>
