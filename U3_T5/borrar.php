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
        <form method="post" action="borrar.php">
        <table>

        <?php
          $connection = new mysqli("localhost", "root", "solidwork", "talleresfaber");
          if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $mysqli->connect_error);
            exit();
          }

      echo '<tr><td>IdReparacion</td><td>'.$_GET['id'].'</td></tr>
            <tr><td>Matricula</td><td>'.$_GET['matricula'].'</td></tr>
            <tr><td>FechaEntrada</td><td>'.$_GET['fechain'].'</td></tr>
            <tr><td>Kilometros</td><td>'.$_GET['km'].'</td></tr>
            <tr><td>Averia</td><td>'.$_GET['averia'].'</td></tr>
            <tr><td>FechaSalida</td><td>'.$_GET['fechaout'].'</td></tr>
            <tr><td>Reparado</td><td>';
              if($_GET["reparado"]==1){
                echo 'Si</td></tr>';
              } else {
                echo 'No</td></tr>';
              }
        echo '<tr><td>Observaciones</td><td>'.$_GET['observ'].'</td></tr>
        <tr><td></td><td><input type="submit" style="margin-bottom: 5px" value="Borrar"></td></tr>
        </table>
        </form>';

        ?>

        <?php else: ?>

          <?php

          $connection = new mysqli("localhost", "root", "solidwork", "talleresfaber");
          if ($connection->connect_error) {
            printf("Connection failed: %s\n", $mysqli->connect_error);
            exit();
          }

          $id=$_GET['id'];

          mysqli_query($connection,"DELETE FROM INTERVIENEN WHERE IdReparacion=$id");
          mysqli_query($connection,"DELETE FROM FACTURAS WHERE IdReparacion=$id");
          mysqli_query($connection,"DELETE FROM INCLUYEN WHERE IdReparacion=$id");
          mysqli_query($connection,"DELETE FROM REPARACIONES WHERE IdReparacion=$id");

          header('Location: reparaciones.php');

          ?>
        <?php endif ?>
        <a href="reparaciones.php"><button type="button">Cancelar</button>
    </body>
</html>
