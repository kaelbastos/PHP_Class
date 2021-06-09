<?php
    
    $nome = "";
    $gridRadios = "";
    $select = "";
    $dataFabricacao= "";
    $dataValidade= "";
    $contraInd = "";
    $inputDescricao = "";
    $indice = 0;
    
    //-------------------------------------------------------
    //                   RECUPERA DADOS
    //-------------------------------------------------------

    if(isset($_GET['Indice'])){
        if(!empty($_GET['Indice'])){
            $indice = $_GET['Indice'];
        }
    }

    $nomeArquivo = 'C:\Users\kaelb\Documents\PHP\inspiração\medicamentos.json';

    // Verifica se o arquivo existe
    if (file_exists($nomeArquivo)) { 
        // Obtem os dados do arquivo 
        $medicamentosJSON = file_get_contents($nomeArquivo);

        // Converte de Json para Array
        $medicamentos = json_decode( $medicamentosJSON, true );
    }else{
        die("O arquivo não existe: $nomeArquivo");
    }

    // -----------------------------------
    // Obtem os dados do índice informado
    // ------------------------------------
    $nome = $medicamentos[$indice]["nome"];
    $gridRadios= $medicamentos[$indice]["gridRadios"];
    $select = $medicamentos[$indice]["select"];
    $dataFabricacao = $medicamentos[$indice]["dataFabricacao"];
    $dataValidade= $medicamentos[$indice]["dataValidade"];
    $contraInd = $medicamentos[$indice]["contraInd"];
    $inputDescricao = $medicamentos[$indice]["inputDescricao"];

    // echo "Código $codDisciplina <br>";
    // echo "Disciplina $disciplina <br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar medicamento</title>
</head>
<body>
<h1>Alterar medicamento</h1>
    <form name="" action="processamento.php" method="GET">
        <fieldset>
            <legend>Alterar</legend>

            <p>
                Nome &ensp;<input type="text" name="txtNome" value=" <?php echo $nome ?>">
            </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="txtGridRadios" id="gridRadios1" value="Comprimido">
                <label class="form-check-label" for="gridRadios1">
                Comprimido
                </label>
            </div>

            <div class="form-check">
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

            <select name="txtSelect" id="select" required>
                <option value="Generico" <?php if($select == "Generico"): ?> selected="selected" <?php endif; ?>>Generico</option>
                <option value="Original"<?php if($select == "Original"): ?> selected="selected" <?php endif; ?>>Original</option>
            </select>

            <p>
                Data fabricação &ensp;<input type="text" name="txtDataFabricacao" value="<?php echo $dataFabricacao?>">
            </p>

            <p>
                Data validade &ensp;<input type="text" name="txtDataValidade" value="<?php echo $dataValidade?>">
            </p>

            <p>
                Contra indicação &ensp;<input type="text" name="txtContraInd" value="<?php echo $contraInd?>">
            </p>

            <p>
                Descrição &ensp;<input type="text" name="txtInputDescricao" value="<?php echo $inputDescricao?>">
            </p>

            <p>
                <input type="submit" name="btnOperacao" value="Alterar" /> &nbsp;
                <input type="submit" name="btnOperacao" value="Cancelar" /> &nbsp;
            </p>

        </fieldset>
    </form>
</body>
</html>