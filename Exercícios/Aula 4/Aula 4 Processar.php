<?php 
    $erro = "";

    if(isset($_POST["sltCafe"])){
        $tipoCafe = $_POST["sltCafe"];

        if(($tipoCafe < 1) || ($tipoCafe > 4)){
            $erro .= "Café inválido; ";
        } else {
            switch($tipoCafe){
                case 1:
                    $precoCafe = 4;
                    break;
                case 2:
                    $precoCafe = 6;
                    break;
                case 3:
                    $precoCafe = 8;
                    break;
                case 4:
                    $precoCafe = 10;
                    break;
                default:
                    $precoCafe = 1;
            }
        }
    } else {
        $erro .= "Nenhum café selecionado; ";
    }

    if(isset($_POST["txtClienteNome"])){
        $nomeCliente = $_POST["txtClienteNome"];

        if(empty($nomeCliente)){
            $erro .= "Nome inválido; ";
        }
    } else {
        $erro .= "Nome inválido; ";
    }

    if(isset($_POST["nmrQuantidade"])){
        $qtdCafe = $_POST["nmrQuantidade"];

        if(($qtdCafe <= 0) || ($qtdCafe > 100)){
            $erro .= "Quantidade inválida; ";
        }
    } else {
        $erro .= "Quantidade inválida; ";
    }

    
    //Se tiver erro redireciona para página de erro
    if(!empty($erro)){
        header("Location: ./Aula 4 Erro.php/?erro=".$erro);
        die();
    } else {
        $total = $qtdCafe * $precoCafe;
        header("Location: ./Aula 4 Exibir.php/?preco=$total&nomeCliente=".urlencode($nomeCliente));
        die();
    }
?>