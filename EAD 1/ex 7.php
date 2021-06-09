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
        $array = [1, 2, 4, 5, 5, 5, 5, 7, 11];
        $X = 5;
        
        $quantidade = 0;
        $item = $array[0];
        
        for($i = 0, $size = count($array); $i < $size && $item <= $X; ++$i){
            $item = $array[$i];
            if($X == $item){
                ++$quantidade;
            }
        }
        
        echo 'Número de ocorrências de '.$X.' = '.$quantidade;
    ?>
</body>

</html>