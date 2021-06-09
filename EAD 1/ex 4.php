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
    $array = [7, 9, 11, 20, 55, 20, 30];

    $result = [];
    $resultCount = 0;

    $combinations = 0;


    $size = count($array);
    /* a solução genérica usaria os mesmos operadores lógicos porém teria complexidade cúbica,
       e como na solução não existiam triângulos equiláteros nem isóceles otimizei o código para 
       não fazer todas as comparações, pois seria um desperdício de tempo.
       A complexidade final do algoritmo fica aproximadamente (x^3/7)- x (anexo da comparação dos gráficos em anexo).
    */
    for ($i = 0; $i < $size - 2; $i++) {
        for ($j = $i + 1; $j < $size; ++$j) {
            for ($k = $j + 1; $k < $size; ++$k) {

                $a = $array[$i];
                $b = $array[$j];
                $c = $array[$k];

                $combinations++;

                if ( ($a != $b && $a != $c && $b != $c) && // primeiro conjunto lógico garante que não existam elementos repitidos
                    ((($a > $b && $a > $c) && ($b + $c > $a)) || //  o que só ocorre quando existe elementos duplicados no input.
                    (($b > $c && $b > $a) && ($a + $c > $b)) || //o segundo garante que seja feita a comparação 
                    (($c > $b && $c > $a) && ($a + $b > $c)))  // da maior aresta contra a soma das duas menores
                ) {                                        // essa solução é mais rápida do que usar ifs aninhados porém é menos legível

                    $result[$resultCount++] = '(' . $a . ',' . $b . ',' . $c . ')';
                }
            }
        }
    }

    echo 'Combinations checked: ' . $combinations . "<br>";
    echo 'Possible Triangles: ' . $resultCount . "<br><br>";

    if ($resultCount > 0) {
        foreach ($result as $value) {
            echo $value."<br>";
        }
    }
    ?>
</body>

</html>