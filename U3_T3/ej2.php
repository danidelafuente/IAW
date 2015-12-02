<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $name = array("2222222X" => "Pepe","3333333X" => "Manuel", "4444444X" => "José", "5555555X" => "Rosa");
    $apell = array("2222222X" => "Pérez" ,"3333333X" =>"Jiménez", "4444444X" => "Martínez", "5555555X" => "Rodríguez" );
    echo "<table border='1'><tr><td>NOMBRE</td><td>APELLIDOS</td></tr>";
    
    foreach($name as $k => $s){
        echo "<tr>";
        echo "<td>".$s."</td>";
        echo "<td>".$apell[$k]."</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    ?>
</body>
</html>
