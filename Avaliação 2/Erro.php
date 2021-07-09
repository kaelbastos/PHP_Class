<?php

    function testInput($data)
    { //validação de segurança para evitar paramPollution
        $data = urldecode($data);
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    
    if (isset($_REQUEST["erro"])) {
        if (!empty($_REQUEST["erro"])) {
            $erro = testInput($_REQUEST["erro"]);
            
        } else {
            $erro = "Erro vazio!";
        }
    } else {
        $erro = "Erro inválido!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="./Style.css">
</head>
<body>
    <?php include "resources/Header.php";?>

    <div class='content'>
        <br><br>
        <fieldset>
            <legend>Erro</legend>
                <h3><?= $erro?></h3>
        </fieldset>

        <br><br><br><br>

        <div class="buttons">

             <a href="./Home.php"><button type="button" class="oposite btn">Voltar</button></a>

        </div>

    </div>

    <?php include "resources/Footer.php";?>

</body>
</html>