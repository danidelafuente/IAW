<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $num1 = rand(0,100);
    $num2 = rand(0,100);
    if ($num1 > $num2) {
        echo "el $num1 es mayor que $num2";
    }
        elseif ($num1 < $num2) {
            echo "el $num2 es mayor que $num1";
    }
        else {
            echo "Los numeros son iguales";
        }
    ?>
</body>
</html>
