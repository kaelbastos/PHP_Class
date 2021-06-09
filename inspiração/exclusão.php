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
<html>
<head>
    <meta charset="utf-8" />
    <title>Minha página</title>
</head>
<body>
<h1>Excluir medicamento</h1>
    <form name="" action="processamento.php" method="GET">
        <fieldset>
            <legend>Alterar</legend>

            <p>
                Nome &ensp;<input type="text" name="nome" readonly  value=" <?php echo $nome ?>">
            </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" readonly  name="gridRadios" id="gridRadios1" value="Comprimido">
                <label class="form-check-label" for="gridRadios1">
                Comprimido
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" readonly  name="gridRadios" id="gridRadios2" value="Líquido">
                <label class="form-check-label" for="gridRadios2">
                    Líquido
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" readonly  name="gridRadios" id="gridRadios3" value="Injeção">
                <label class="form-check-label" for="gridRadios3">
                    Injeção
                </label>
            </div>

            <select name="select" id="select" required>
                <option value="Generico" readonly  <?php if($select == "Generico"): ?> selected="selected" <?php endif; ?>>Generico</option>
                <option value="Original" readonly  <?php if($select == "Original"): ?> selected="selected" <?php endif; ?>>Original</option>
            </select>

            <p>
                Data fabricação &ensp;<input type="text" name="dataFabricacao" readonly  value="<?php echo $dataFabricacao?>">
            </p>

            <p>
                Data validade &ensp;<input type="text" name="dataValidade" readonly  value="<?php echo $dataValidade?>">
            </p>

            <p>
                Contra indicação &ensp;<input type="text" name="contraInd" readonly  value="<?php echo $contraInd?>">
            </p>

            <p>
                Descrição &ensp;<input type="text" name="inputDescricao" readonly  value="<?php echo $inputDescricao?>">
            </p>

            <p>
                <input type="submit" name="btnOperacao" value="Excluir" /> &nbsp;
                <input type="submit" name="btnOperacao" value="Cancelar" /> &nbsp;
            </p>

        </fieldset>
    </form>
</body>

</html>