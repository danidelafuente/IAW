<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    <script type="text/javascript" src=" "></script>
    </head>
    <body>
      <?php  if (!isset($_POST['Matricula'])) : ?>

        <h3 style="margin-bottom: 10px">Datos de la Reparación</h3>
        <form method="post" action="editar.php">
        <table>

        <?php
          $connection = new mysqli("localhost", "root", "solidwork", "talleresfaber");
          if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $mysqli->connect_error);
            exit();
          }

          $id = $_GET['id'];
          $matricula = $_GET['matricula'];
          $fechain = $_GET['fechain'];
          $km = $_GET['km'];
          $averia = $_GET['averia'];
          $fechaout = $_GET['fechaout'];
          $repair = $_GET["reparado"];
          $observ = $_GET['observ'];


      echo '<tr><td>IdReparacion</td><td><input type="text" name="Id" style="margin-bottom: 5px" value="'.$id.'" disabled></td></tr>
            <tr><td>Matricula</td><td><input type="text" name="Matricula" style="margin-bottom: 5px" value="'.$matricula.'" disabled></td></tr>
            <tr><td>FechaEntrada</td><td><input type="date" name="FechaIn" style="margin-bottom: 5px" value="'.$fechain.'"></td></tr>
            <tr><td>Kilometros</td><td><input type="number" name="Km" style="margin-bottom: 5px" value="'.$km.'"></td></tr>
            <tr><td>Averia</td><td><input type="text" size="100" name="Averia" style="margin-bottom: 5px" value="'.$averia.'"></td></tr>
            <tr><td>FechaSalida</td><td><input type="date" name="FechaOut" style="margin-bottom: 5px" value="'.$fechaout.'"></td></tr>
            <tr><td>Reparado</td><td>';
              if($repair==1){
                echo '<input type="radio" name="Reparado" value="1" checked>Si<input type="radio" name="Reparado" value="0">No</td></tr>';
              } else {
                echo '<input type="radio" name="Reparado" value="1">Si<input type="radio" name="Reparado" value="0" checked>No</td></tr>';
              }
        echo '<tr><td>Observaciones</td><td><input type="text" size="100" name="Observaciones" style="margin-bottom: 5px" value="'.$observ.'"></td></tr>
        <tr><td></td><td><input type="submit" style="margin-bottom: 5px"></td></tr>
        </table>
        </form>';

        ?>

        <?php else: ?>

            <?php

            $id = $_POST['Id'];
            $matricula = $_POST['Matricula'];
            $fechain = $_POST['FechaIn'];
            $km = $_POST['Km'];
            $averia = $_POST['Averia'];
            $fechaout = $_POST['FechaOut'];
            $repair = $_POST["Reparado"];
            $observ = $_POST['Observaciones'];

                $connection = new mysqli("localhost", "root", "solidwork", "talleresfaber");
                if ($connection->connect_errno) {
                    printf("Connection failed: %s\n", $connection->connect_error);
                    exit();
                }

                $q="UPDATE REPARACIONES SET IdReparacion='".$id ."',Matricula='".$matricula."', FechaEntrada='".$fechain."', Km='".$km."', Averia='".$averia."' ,FechaSalida='".$fechaout."' ,Observaciones='".$observ."' WHERE IdReparacion=$id";

                $result=$connection->query($q);

                if (!$result) {
                    echo ERROR;
                }

                unset($connection);
                header("Location: reparaciones.php");
            ?>
        <?php endif ?>
        <a href="reparaciones.php"><button type="button">Cancelar</button>
    </body>
</html>
