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
    <div class="corpo">
        <form action="Aula 3 Receber.php" method="POST">
            <br><br>

            <table class="tabela">
                <tr>
                    <td>Usuário</td>
                    <td><input type="text" name="txtUsuario" value="" size=30></td>
                </tr> 

                <tr>
                    <td>Senha</td>
                    <td><input type="password" name="pwdUsuario" value="" size=30></td>
                </tr> 

                <tr>
                    <td>&nbsp;</td>
                    <td class="centralizar"><input type="submit" name="btnSubmit" value="Entrar"></td>
                </tr>            
            </table>
        </form>
    </div>
</body>
</html>