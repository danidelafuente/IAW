<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $numero = rand(1,5);
    switch ($numero) {
        case 1:
            echo "Uno";
            break;
        case 2:
            echo "Dos";
            break;
        case 3:
            echo "Tres";
            break;
        case 4:
            echo "Cuatro";
            break;
        case 5:
            echo "Cinco";
            break;
    }
    ?>
</body>
</html>
