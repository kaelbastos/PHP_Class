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
        $product = 10;

        if ($product >= 8 && $product <= 15){
            echo "limpeza e utensílios domésticos";
        } else {
            switch($product){
                case 1:
                    echo "Alimento perecível";
                    break;
                case 2:
                    echo "Alimento não-perecível";
                    break;
                case 3:
                    echo "Alimento não-perecível";
                    break;
                case 4:
                    echo "Alimento não-perecível";
                    break;
                case 5:
                    echo "Alimento não-perecível";
                    break;
                case 6:
                    echo "Alimento não-perecível";
                    break;
                case 7:
                    echo "Higiene pessoal";
                    break;
                default:
                    echo "Inválido";
            }
        }
    ?>
</body>
</html>