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
        $array = [7, 8, 8, 8, 9, 9];

        $result = [];
                      
        foreach( $array as $value){
            $result[$value] = true;
        }
        
        $notFirst = false;
        
        foreach( $result as $key => $value){
            if ($notFirst){
                echo " - ".$key;   
            } else {
                echo $key;
                $notFirst = true;
            }
        }
    ?>
</body>

</html>