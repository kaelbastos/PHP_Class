<?php 
    if(isset($_REQUEST["erro"])){
        $erro = $_REQUEST["erro"];
    } else {
        $erro = "Vazio!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Erro</legend>
            <table>
                <tr>
                    <td>Erro:</td>
                    <td><?php echo $erro; ?></td>
                </tr>
            </table>
            <p><a href="../Aula 4 Enviar.php">Voltar</a></p>
    </fieldset>
</body>
</html>