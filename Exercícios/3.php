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
        $base = 5;
        $exponent = 3;

        $count = 0;
        $pow = 1;
        while ($count < $exponent) {

            $pow = $pow * $base;
            $count++;
        }
    
        echo "<h2>Potencia de $base elevado à $exponent == $pow</h2>";
    
    ?>
</body>
</html>