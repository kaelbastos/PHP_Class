<?php

$medicamentos = [];  
$nomeArquivo = 'D:\xampp\htdocs\Projeto_GuilhermeTrujilo_ViniciusCerosi\medicamentos.json';

if (file_exists($nomeArquivo)) { 
  $medicamentosJSON = file_get_contents($nomeArquivo);
  $medicamentos = json_decode($medicamentosJSON, true );   
}
/*
foreach ($medicamentos as $medid => $medicamneto) {
    echo "Índice: " . $medid. "<br>" ;
    echo "Código Disciplina: " . $disciplina['CodDisciplina'] . "<br>" ;
    echo "Disciplina: " . $disciplina['Disciplina'] . "<br><br>" ;    
}
*/

/*function addJson($medicamentos){
    $medicamento = 
    $jsonMedicamentos = json_encode($medicamentos);
    $nomeArquivo = 'D:\xampp\htdocs\Projeto_GuilhermeTrujilo_ViniciusCerosi\medicamentos.json';
    $file = fopen($nomeArquivo,'w');
    fwrite($file, $jsonMedicamentos);
    fclose($file);
}
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Trabalho PW2</title>
</head>

<body>
    <div class="container" style="padding: 10px;">
        <h1 style="text-align: center;">Cadastrar medicamento</h1>
        <br>
        <form name="formulario" method="GET" action="processamento.php" class="container">
            <div class="form-group row">
                <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtNome" placeholder="Nome do medicamento" required>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-2 pt-0">Tipo</legend>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="txtGridRadios" id="gridRadios1" value="Comprimido" checked>
                <label class="form-check-label" for="gridRadios1">
                    Comprimido
                </label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="txtGridRadios" id="gridRadios2" value="Líquido">
                <label class="form-check-label" for="gridRadios2">
                    Líquido
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="txtGridRadios" id="gridRadios3" value="Injeção">
                <label class="form-check-label" for="gridRadios3">
                    Injeção
                </label>
            </div>
            <br>
            <select name="txtSelect" id="select">
                <option value="Generico" selected>Generico</option>
                <option value="Original">Original</option>
            </select>
            <br><br>
            <div class="form-group row">
                <label for="dataFabricacao" class="col-sm-2 col-form-label">Data de Fabricação:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtDataFabricacao" placeholder="Digite a data de Fabricação" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="dataValidade" class="col-sm-2 col-form-label">Data de Validade:</label>
                <div class="col-sm-10">
                    <input type="text" name="txtDataValidade" class="form-control" id="dataValidade" placeholder="Digite a data de Validade" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="contraIndicacao" class="col-sm-2 col-form-label">Contra Indicação:</label>
                <div class="col-sm-10">
                    <input type="text" name="txtContraInd" class="form-control" id="contraInd" placeholder="Digite a contra indicacao" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDescricao" class="col-sm-2 col-form-label">Descrição:</label>
                <div class="col-sm-10">
                    <input type="textArea" name="txtInputDescricao" class="form-control" id="inputDescricao" placeholder="Digite a descrição" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10" style="text-align: center;">
                    <button type="submit" name="btnOperacao" value="Inserir" class="btn btn-primary">Inserir</button>
                </div>
            </div>
        </form>
        <fieldset class="container">
            <legend>Tabela</legend>
            <table class="table">
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Definição</th>
                    <th>Data de Fabricação</th>
                    <th>Data de Validade</th>
                    <th>Contra Indicação</th>
                    <th>Descrição</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>
                <?php foreach ($medicamentos as $medIdx => $medicamento) {?>
                <tr>
                    <td> <?php echo $medicamento["nome"]; ?> </td>
                    <td> <?php echo $medicamento["gridRadios"]; ?> </td>
                    <td> <?php echo $medicamento["select"]; ?> </td>
                    <td> <?php echo $medicamento["dataFabricacao"]; ?> </td>
                    <td> <?php echo $medicamento["dataValidade"]; ?> </td>
                    <td> <?php echo $medicamento["contraInd"]; ?> </td>
                    <td> <?php echo $medicamento["inputDescricao"]; ?> </td>
                    <td><a href="alteração.php?Indice=<?php echo $medIdx ?>"><img src="alterar.png" alt="" width="25px" height="25px"></a></td>
                    <td><a href="exclusão.php?Indice=<?php echo $medIdx ?>"><img src="excluir.png" alt="" width="25px" height="25px"></a></td>
                </tr>
                <?php   }  ?>
            </table>
        </fieldset>
    </div>
</body>

</html>