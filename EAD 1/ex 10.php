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
        $array = [13, 4, 20, 10, 50];

        $result = array($array[0]);
        
        $previous = $array[0];
        
        for($i = 1, $size = count($array); $i < $size; ++$i){
            $item = $array[$i];
            if($item > $previous){
                array_push ($result, $item);
                $previous = $item;
            }
        }
        
        echo "Edifícios que visualizam a antena = ";
        
        foreach($result as $value){
            echo $value.' ';
        }
    ?>
</body>

</html>