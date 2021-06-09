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
        $matrix = [
            [-2, 1, -8],
            [ 4, 3, -4],
            [ 7, 9,  4]
        ];

        $diagonais = [];

        for ($i = 0; $i < $size; $i++){
            $diagonais[0][$i] = $matrix[$i][$i];
        }
        
        for ($i = $size; $i > 0; $i--){
            $diagonais[1][$size - $i] = $matrix[$size - $i][$i];
        }


        
    ?>
</body>
</html>