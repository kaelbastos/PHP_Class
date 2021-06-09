<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>

<body>
    <?php
    echo "<h1>Error</h1>";
    function testInput($data)
    { //validação de segurança para evitar paramPollution 
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    if (isset($_SERVER['REQUEST_URI'])) {
        //$rota = explode("/", $_SERVER['REQUEST_URI']);
        echo "<hr>";
        var_dump( $_GET);
        echo "<hr>";
    } else {
        echo "url n existe";
    }
    ?>
</body>

</html>