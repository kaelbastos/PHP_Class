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
    $array = [7, 9, 11, 1, 2, 4, 0];

    for ($i = 0, $max = count($array) - 1; $i <= $max; ++$i) {
        if ($i == $max || $array[$i] > $array[$i + 1]) {
            echo $array[$i] . " ";
        }
    }
    ?>
</body>

</html>