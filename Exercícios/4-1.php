<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function parcelas ($valor, $juros, $quantidadeDeParcelas){

            $parcelas = [$valor];

            for( $i = 1; $i < $quantidadeDeParcelas; $i++){
                $parcelas[$i] = $parcelas[$i - 1] + $juros;
            }

            echo "<h2> Valor: $valor </h2>";
            echo "<h2> Juros: $juros </h2>";
            echo "<h2> Parcelas: </h2>";

            foreach($parcelas as $parcela){
                echo $parcela . "<br>";
            }
        }

        parcelas(100, 10, 10);
    ?>
</body>
</html>