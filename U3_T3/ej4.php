<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $v = [4,8,15,99,23,42,63,78,91,16];
    $num = 0;
    for ($i=1;$i<sizeof($v);$i++){
        if($num<$v[$i]){
            $num = $v[$i];
        }
    }
    echo $num;
    ?>
</body>
</html>
