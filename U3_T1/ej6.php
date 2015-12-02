<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $fecha = date("d");
    if ($fecha < 11) {
        echo "El sitio está fuera de servicio en estos momentos";
    }
    else {
        echo "El sitio está disponible en estos momentos";
    }
    ?>
</body>
</html>
