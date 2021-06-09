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
        function volume ($comprimento, $altura, $largura){
            $volume = $comprimento * $altura * $largura;
            echo "<h2> Volume: $volume  unidades cúbicas </h2>";
        }

        volume(1,2,3);
    ?>
</body>
</html>