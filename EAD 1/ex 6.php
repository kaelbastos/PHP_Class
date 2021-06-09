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
        $array = [0, 1, 2, 4, 7, 9, 11];
        $X = 6;
        
        $piso = $array[0];
        
        for($i = 0, $size = count($array); $i < $size; ++$i){
            $item = $array[$i];
            if($item < $X && $item > $piso){
                $piso = $item;
            }
        }
        
        echo 'Piso = '.$piso;
    ?>
</body>

</html>