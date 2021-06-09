<?php

$operacao = "";
$nome = "";//$codDisciplina = "";
$grid= "";//$disciplina = "";
$dataf = "";
$datav = "";
$contraind = "";
$inputDesc = "";
$select = "";



if(isset($_GET["btnOperacao"])){
    if(!empty($_GET["btnOperacao"])){
        $operacao = $_GET["btnOperacao"]; 
    }
}

if(isset($_GET["txtNome"])){
    if(!empty($_GET["txtNome"])){
        $nome = $_GET["txtNome"]; 
    }
}

if(isset($_GET["txtGridRadios"])){
    if(!empty($_GET["txtGridRadios"])){
        $gridRadios= $_GET["txtGridRadios"]; 
    }
}


if(isset($_GET["txtSelect"])){
    if(!empty($_GET["txtSelect"])){
        $select = $_GET["txtSelect"]; 
    }
}

if(isset($_GET["txtDataFabricacao"])){
    if(!empty($_GET["txtDataFabricacao"])){
        $dataFabricacao= $_GET["txtDataFabricacao"]; 
    }
}

if(isset($_GET["txtDataValidade"])){
    if(!empty($_GET["txtDataValidade"])){
        $dataValidade= $_GET["txtDataValidade"]; 
    }
}

if(isset($_GET["txtContraInd"])){
    if(!empty($_GET["txtContraInd"])){
        $contraInd= $_GET["txtContraInd"]; 
    }
}

if(isset($_GET["txtInputDescricao"])){
    if(!empty($_GET["txtInputDescricao"])){
        $inputDescricao= $_GET["txtInputDescricao"]; 
    }
}


//---------------------------------------------------------
//                 VALIDAÇÃO OS DADOS
//---------------------------------------------------------

if(empty($nome)){
    echo "<h2>Nome do medicamento.</h2>";
    echo "<p><a href='principal.php'>Clique aqui para voltar.</a></p>"; // MUDAR HREF
    die(); // que encerra o processamento desta página
}

if(empty($gridRadios)){
    echo "<h2>grid não informada.</h2>";
    echo "<p><a href='principal.php'>Clique aqui para voltar.</a></p>";
    die(); // que encerra o processamento desta página
}

if(empty($select)){
    echo "<h2>select não informada.</h2>";
    echo "<p><a href='principalphp'>Clique aqui para voltar.</a></p>";
    die(); // que encerra o processamento desta página
}

if(empty($dataFabricacao)){
    echo "<h2>data fab não informada.</h2>";
    echo "<p><a href='principal.php'>Clique aqui para voltar.</a></p>";
    die(); // que encerra o processamento desta página
}

if(empty($dataValidade)){
    echo "<h2>data val não informada.</h2>";
    echo "<p><a href='principal.php'>Clique aqui para voltar.</a></p>";
    die(); // que encerra o processamento desta página
}

if(empty($contraInd)){
    echo "<h2>Contra indicação não informada.</h2>";
    echo "<p><a href='principal.php'>Clique aqui para voltar.</a></p>";
    die(); // que encerra o processamento desta página
}

if(empty($inputDescricao)){
    echo "<h2>descrição não informada.</h2>";
    echo "<p><a href='principal.php'>Clique aqui para voltar.</a></p>";
    die(); // que encerra o processamento desta página
}


//---------------------------------------------------------
//                 PROCESSAR OS DADOS-OPERAÇÕES
//---------------------------------------------------------

if($operacao == "Inserir"){
    $nomeArquivo = 'C:\Users\kaelb\Documents\PHP\inspiração\medicamentos.json';

    // Verifica se o arquivo existe
    if (file_exists($nomeArquivo)) { 
        
        // Obtem os dados do arquivo 
        $medicamentosJSON = file_get_contents($nomeArquivo);

        // Converte de Json para Array
        $medicamentos = json_decode($medicamentosJSON, true );   
    }

    //------------------------------------------------
    // Adiciona novos dados no final do array 
    //------------------------------------------------
    $medicamentos[] = ['nome' =>$nome, 'gridRadios' =>$gridRadios, 'select'=>$select, 'dataFabricacao'=>$dataFabricacao, 'dataValidade'=>$dataValidade, 'contraInd'=>$contraInd, 'inputDescricao'=>$inputDescricao];
   

    // // Converte de Array para Json 
    $medicamentosJSON = json_encode($medicamentos);

    // Salva o arquivo
    file_put_contents($nomeArquivo, $medicamentosJSON);

    // Redireciona de volta para a página principal
    header("Location: principal.php");
    die();
}
elseif($operacao == "Alterar"){
    $nomeArquivo = 'C:\Users\kaelb\Documents\PHP\inspiração\medicamentos.json';
    //---------------------------------------
    //CARREGAR ARQUIVO PRA MEMORIA
    //---------------------------------------
    if (file_exists($nomeArquivo)) { 
            
        // Obtem os dados do arquivo 
        $medicamentosJSON = file_get_contents($nomeArquivo);
        
        // Converte de Json para Array
        $medicamentos = json_decode($medicamentosJSON , true );  
        
    }else{
        die("O arquivo não existe: $nomeArquivo");
    }

    //---------------------------------------
    //ALTERAR DADOS
    //---------------------------------------
    $medicamentos[$indice]['nome'] = $nome;
    $medicamentos[$indice]['gridRadios'] = $gridRadios;
    $medicamentos[$indice]['select'] = $select;
    $medicamentos[$indice]['dataFabricacao'] = $dataFabricacao;
    $medicamentos[$indice]['dataValidade'] = $dataValidade;
    $medicamentos[$indice]['contraInd'] = $contraInd;
    $medicamentos[$indice]['inputDescricao'] = $inputDescricao;

    
    
    //---------------------------------------
    //SALVAR DA MEMÓRIA PARA O ARQUIVO
    //---------------------------------------
    
    //Converte de Array para Json 
    $medicamentosJSON = json_encode($medicamentos);
    
    //apaga os dados antigos e reescreve
    file_put_contents($nomeArquivo, $medicamentosJSON);
    
    // Redireciona de volta para a página principal
    header("Location: principal.php");
    die();
}
elseif($operacao == "Excluir"){
    $nomeArquivo = 'C:\Users\kaelb\Documents\PHP\inspiração\medicamentos.json';
        
        //---------------------------------------
        //CARREGAR ARQUIVO PRA MEMORIA
        //---------------------------------------

        // Verifica se o arquivo existe
    if (file_exists($nomeArquivo)) {                
        // Obtem os dados do arquivo 
        $medicamentosJSON = file_get_contents($nomeArquivo);            
        // Converte de Json para Array
        $disciplinas = json_decode($medicamentosJSON, true );      
    }else{
        die("O arquivo não existe: $nomeArquivo");
    }
                    
    //---------------------------------------
    //EXCLUIR OS DADOS
    //---------------------------------------
        
    unset($medicamentos[$indice]);       //apaga a linha desejada
               
    //---------------------------------------
    //SALVAR DA MEMÓRIA PARA O ARQUIVO
    //---------------------------------------     
    //Converte de Array para Json 
    $medicamentosJSON = json_encode($medicamentos);
        
    //apaga os dados antigos e reescreve
    file_put_contents($nomeArquivo, $medicamentosJSON);  //regrava a linha no arquivo, reescrevendo considerando o que foi apagado
        
    // Redireciona de volta para a página principal
    header("Location: principal.php");
    die();
}
elseif($operacao == "Cancelar"){
    header("Location: principal.php");
    die(); //redireciona pra pág. de enviar quando clica em cancelar na pág. de alterar         
}
else{
    echo "<h2>$operacao Operação não cadastra.</h2>";
    
    echo "<p><a href='principal.php'>Clique aqui para voltar.</a></p>";
    die();
}
                

?>

