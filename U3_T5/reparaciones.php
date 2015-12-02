<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparaciones</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <script type="text/javascript" src=" "></script>
    </head>
    <body>
      <?php
      $connection = new mysqli("localhost", "root", "solidwork", "talleresfaber");
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $mysqli->connect_error);
            exit();
        }

        if ($result = $connection->query("SELECT * FROM REPARACIONES;")) {

            printf("<h2>REPARACIONES TALLERES FABER</h2>");

        ?>

            <table border=1>
            <thead>
              <tr>
                <th>IdReparacion</th>
                <th>Matricula</th>
                <th>FechaEntrada</th>
                <th>Km</th>
                <th>Averia</th>
                <th>FechaSalida</th>
                <th>Reparado</th>
                <th>Observaciones</th>
                <th>Editar</th>
                <th>AddMecanico</th>
                <th>AddPieza</th>
                <th>Borrar</th>
            </thead>

        <?php

            while($obj = $result->fetch_object()) {
                echo "<tr align='center'>";
                echo "<td>".$obj->IdReparacion."</td>";
                echo "<td>".$obj->Matricula."</td>";
                echo "<td>".$obj->FechaEntrada."</td>";
                echo "<td>".$obj->Km."</td>";
                echo "<td>".$obj->Averia."</td>";
                echo "<td>".$obj->FechaSalida."</td>";
                echo "<td>";
                  if($obj->Reparado==1){
                    echo "Si";
                  }else{
                    echo "No";
                  }
                echo "</td>";
                echo "<td>".$obj->Observaciones."</td>";
                echo "<td><a href='editar.php?id=$obj->IdReparacion&matricula=$obj->Matricula&fechain=$obj->FechaEntrada&km=$obj->Km&averia=$obj->Averia&fechaout=$obj->FechaSalida&reparado=$obj->Reparado&observ=$obj->Observaciones'><img src='editar.png'></a></td>";
                echo "<td><a href='asignar_empleados.php?id=$obj->IdReparacion'><img src='mecanico.jpg' width='70' height='25'></a></td>";
                echo "<td><a href='asignar_piezas.php?id=$obj->IdReparacion'><img src='pieza.jpg' width='65' height='25'></a></td>";
                echo "<td><a href='borrar.php?id=$obj->IdReparacion&matricula=$obj->Matricula&fechain=$obj->FechaEntrada&km=$obj->Km&averia=$obj->Averia&fechaout=$obj->FechaSalida&reparado=$obj->Reparado&observ=$obj->Observaciones'><img src='borrar.png'width='50' height='25'></a></td>";
                echo "</tr>";
            }



            $result->close();
            unset($obj);
            unset($connection);


        }
      ?>
      <a href="crear.php"><button type="button">Añadir Reparacion</button>
    </body>
</html>
