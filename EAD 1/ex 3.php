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
        $array = [7, 5, 300, 60, 800, 73];

        $result = array(
            "greater" => $array[1],
            "secondGreater" => $array[1]
        );

        foreach ($array as $value) {
            if ($value > $result["greater"]) {
                $result["secondGreater"] = $result["greater"];
                $result["greater"] = $value;
            } elseif ($value > $result["secondGreater"]) {
                $result["secondGreater"] = $value;
            }
        }

        foreach ($result as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
    ?>
</body>

</html>