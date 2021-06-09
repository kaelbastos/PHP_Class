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
        $array = [3, 4, 3, 4, 5, 5, 5, 6, 7, 7, 6, 5];
        $X = 5;
        
        $result = [];
        
        for ($i = 0; $i <= $X; ++$i){//Geração do "dicionário" com as contagens
            $result[$i] = 0;
        }
        
        for($i = 0, $size = count($array); $i < $size; ++$i){
            $item = $array[$i];
            if($item <= $X){
                ++$result[$item];
            }
        }
        
        echo "Frequência: <br>";
        
        foreach($result as $key => $quantity){
            echo $key.' = '.$quantity." vezes <br>";
        }
    ?>
</body>

</html>