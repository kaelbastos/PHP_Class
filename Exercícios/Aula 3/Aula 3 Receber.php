<?php 

    function validarLogin($usuario, $senha){
        $bcoCripUsuario = md5("batata");
        $bcoCripSenha = md5("senhaforte");

        $frmCripUsuario = md5($usuario);
        $frmCripSenha = md5($senha);

        if(($bcoCripUsuario == $frmCripUsuario) && ($bcoCripSenha == $frmCripSenha)){
            return true;
        } else {
            return false;
        }
    }

    $validacao = false;

    if(isset($_POST["txtUsuario"])){
        $usuario = $_POST["txtUsuario"];

        if(!empty($usuario)){
            $validacao = true;
        }
    }

    if(!$validacao){
        echo "<p>Usuário não informado</p>";
    }

    if(isset($_POST["pwdUsuario"])){
        $senha = $_POST["pwdUsuario"];

        if(!empty($senha)){
            $validacao = true;
        }
    }

    if(!$validacao){
        echo "<p>Senha não informada</p>";
    }


    $validacao = validarLogin($usuario, $senha);

    if(!$validacao){
        echo "<p class='falha'>Usuário ou senha inválidos</p>";
    } else {
        echo "<p class='sucesso'>$usuario, seja bem vindo(a)</p>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Aula 3 Login.css">
</head>
<body>
    <p><a href="Aula 3 Enviar.php">Voltar</a></p>
</body>
</html>