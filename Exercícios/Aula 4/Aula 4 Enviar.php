<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Café Pobr's</h1>
    <form action="Aula 4 Processar.php" method="post">
        <br><br>
        <fieldset>
            <legend>Tipo Café</legend>
            <table class="tabela">
                <tr>
                    <td>Café:</td>
                    <td>
                        <select name="sltCafe" id="sltCafe">
                            <option value="1">Aroma caseiro R$4,00</option>
                            <option value="2">Café com leite R$6,00</option>
                            <option value="3">Minas cappuccino R$8,00</option>
                            <option value="4">Coração crescente R$10,00</option>
                        </select>
                    </td>
                </tr> 

                <tr>
                    <td>Cliente</td>
                    <td><input type="text" name="txtClienteNome" value="" size=30></td>
                </tr>

                <tr>
                    <td>Quantidade</td>
                    <td><input type="number" name="nmrQuantidade" value="" size=30></td>
                </tr> 

                <tr>
                    <td>&nbsp;</td>
                    <td class="centralizar"><input type="submit" name="btnSubmit" value="Comprar"></td>
                </tr>            
            </table>
        </fieldset>
    </form>
</body>
</html>