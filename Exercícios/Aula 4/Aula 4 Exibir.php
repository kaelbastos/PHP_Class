<?php 
    if(isset($_REQUEST["preco"])){
        $preco = $_REQUEST["preco"];

        if(empty($preco)){
            $preco = 0;
        }
    } else {
        $preco = 0;
    }

    if(isset($_REQUEST["nomeCliente"])){
        $nomeCliente = urldecode($_REQUEST["nomeCliente"]);

        if(empty($nomeCliente)){
            $nomeCliente = "NaN";
        }
    } else {
        $nomeCliente = "NaN";
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
        <legend>Dados da compra</legend>
            <table>
                <tr>
                    <td><strong>Cliente:</strong></td>
                    <td><?php echo $nomeCliente; ?></td>
                </tr>
                <tr>
                    <td><strong>Total:</strong></td>
                    <td><?php echo $preco; ?></td>
                </tr>
            </table>
            <p><a href="../Aula 4 Enviar.php">Voltar</a></p>
    </fieldset>
</body>
</html>