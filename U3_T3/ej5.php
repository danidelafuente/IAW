<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $v = [];
        $tabla=77;
        echo "<ol>";
        for($i=0;$i<=10;$i++){
            $v[$i] = $i * $tabla;
            echo "<li>$v[$i]</li>";
        }
        echo "</ol>";
    ?>
</body>
</html>
