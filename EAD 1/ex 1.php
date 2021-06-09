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
        $array = [7, 5, 3, 60, 800, 555];

        $result = array(
            "min" => $array[1],
            "max" => $array[1]
        );

        foreach ($array as $value) {
            if ($value < $result["min"]) {
                $result["min"] = $value;
            } elseif ($value > $result["max"]) {
                $result["max"] = $value;
            }
        }

        foreach ($result as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
    ?>
</body>

</html>