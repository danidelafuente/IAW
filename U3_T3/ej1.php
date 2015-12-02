<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $ciudad = ["San Cristobal","Cucuta","Maracaibo","Caracas"];
    echo "Numero de elementos ".sizeof($ciudad)."</br>";
    for($i=0;$i<sizeof($ciudad);$i++){
        echo "Ciudad ".$i;
        echo "<h2>".$ciudad[$i]."</h2>";
    }
    ?>
</body>
</html>
