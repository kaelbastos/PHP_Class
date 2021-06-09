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
    echo "index<br>";


    $id = $_GET["id"] ?? '';
    $detail = $_GET["detail"] ?? '';

    $movies = [
        array(
            'name' => 'filme 1',
            'id' => 1,
            'director' => 'director 1',
            'description' => 'description 1'
        ),
        array(
            'name' => 'filme 2',
            'id' => 2,
            'director' => 'director 2',
            'description' => 'description 2'
        ),
        array(
            'name' => 'filme 3',
            'id' => 3,
            'director' => 'director 3',
            'description' => 'description 3'
        ),
        array(
            'name' => 'filme 4',
            'id' => 4,
            'director' => 'director 4',
            'description' => 'description 4'
        )
    ];

    if ($id != '') {
        $idflag = false;

        foreach ($movies as $movie) {
            if (in_array($id, $movie)) {
                
                if ($detail != '') {
                    if (array_key_exists($detail, $movie)) {
                        echo $movie[$detail];
                    } else {
                        echo "<h1>detail Not Found</h1>";
                    }
                } else {
                    var_dump($movie);
                }

                $idflag = true;
                break;
            }
        }

        if (!$idflag) {
            echo "<h1>Movie Not Found</h1>";
        }
    } else {
        var_dump($movies);
    }

    ?>
</body>

</html>