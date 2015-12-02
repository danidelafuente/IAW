<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $array = array("arriba","abajo","derecha","izquierda");
        $list = rand(0,3);
        switch ($array[$list]) {
            case 'arriba':
                echo "<b>arriba<b>";
                break;
            case 'abajo':
                echo "<b>abajo<b>";
                break;
            case 'derecha':
                echo "<b>derecha<b>";
                break;
            case 'izquierda':
                echo "<b>izquierda<b>";
                break;
        }
        
    ?>
</body>
</html>
