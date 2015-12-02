<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $nombre =["roberto","juan","marta","moria","martin","jorge","miriam","nahuel","mirta"];
    $vacio = [];
    for($i=0;$i<count($nombre);$i++){
        if(strchr($nombre[$i],"m")){
            $vacio[]=$nombre[$i];
        }
    }
    var_dump($vacio);
    ?>
</body>
</html>
