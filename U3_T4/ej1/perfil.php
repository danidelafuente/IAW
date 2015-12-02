<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h2 style="margin-left:25px">Perfil de Estudiante</h2>
    <div>
        <?php
        $id = [array('nombre' => 'Jose', 'apell' => 'Perez Gomez', 'dir' => 'C/Madrid, 10', 'email' => 'jose@jose.com', 'telef' => '000000000'), array('nombre' => 'Antonio', 'apell' => 'Garcia Lorca', 'dir' => 'C/Sevilla, 1', 'email' => 'antonio@antonio.com', 'telef' => '111111111'), array('nombre' => 'Juan', 'apell' => 'Muñoz Mendoza', 'dir' => 'C/Huelva, 2', 'email' => 'juan@juan.com', 'telef' => '222222222'), array('nombre' => 'Francisco', 'apell' => 'Torres Fernandez', 'dir' => 'C/Cadiz, 3', 'email' => 'franc@franc.com', 'telef' => '333333333'), array('nombre' => 'Alberto', 'apell' => 'Rodriguez Garcia', 'dir' => 'C/Malaga, 4', 'email' => 'alberto@alberto.com', 'telef' => '444444444'), array('nombre' => 'Carlos', 'apell' => 'Muñoz Fernandez', 'dir' => 'C/Cordoba, 5', 'email' => 'carlos@carlos.com', 'telef' => '555555555'), array('nombre' => 'Daniel', 'apell' => 'Garcia Lopez', 'dir' => 'C/Granada, 6', 'email' => 'daniel@daniel.com', 'telef' => '666666666'), array('nombre' => 'Manuel', 'apell' => 'Gomez Ibarra', 'dir' => 'C/Almeria, 7', 'email' => 'manuel@manuel.com', 'telef' => '777777777'), array('nombre' => 'Pedro', 'apell' => 'Sevilla Bernal', 'dir' => 'C/Jaen, 8', 'email' => 'pedro@pedro.com', 'telef' => '888888888'), array('nombre' => 'Fernando', 'apell' => 'Cabral Moreno', 'dir' => 'C/Barcelona, 9', 'email' => 'fernando@fernando.com', 'telef' => '999999999')];
        
        echo "<div style='width: 270; float: left'>";
        
            echo "<img src='". $_GET['id'] .".jpg' height='400' width='250' border='1px'>";
        echo "</div>";
        echo "<div style='width: 250; float: left; margin-left: 10px'>";
            echo "<h3>".$id[$_GET['id']]['nombre']." ".$id[$_GET['id']]['apell']."</h3>";
            echo "<p>Dirección: ".$id[$_GET['id']]['dir']."</p>";
            echo "<p>Email: ".$id[$_GET['id']]['email']."</p>";
            echo "<p>Telefono: ".$id[$_GET['id']]['telef']."</p>";
        echo "</div>";
        ?>
    </div>
</body>
</html>
