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
            <form method="post" action="crear.php">
            <table>
                <tr><td>Matricula</td><td>
                  <?php
                    $connection = new mysqli("localhost", "root", "solidwork", "talleresfaber");
                    if ($connection->connect_errno) {
                      printf("Connection failed: %s\n", $mysqli->connect_error);
                      exit();
                    }
                        echo '<select name="Matricula">';
                      $result=$connection->query("select Matricula from vehiculos");
                      while ($fila=$result->fetch_object()) {
                        echo  "<option value='$fila->Matricula'>$fila->Matricula</option>";
                      }
                        echo '</select>';
                    ?>
                </td></tr>
                <tr><td>FechaEntrada</td><td><input type="date" name="FechaIn" style="margin-bottom: 5px"></td></tr>
                <tr><td>Kilometros</td><td><input type="number" name="Km" style="margin-bottom: 5px"></td></tr>
                <tr><td>Averia</td><td><input type="text" size="100" name="Averia" style="margin-bottom: 5px"></td></tr>
                <tr><td>FechaSalida</td><td><input type="date" name="FechaOut" style="margin-bottom: 5px"></td></tr>
                <tr><td>Reparado</td><td><input type="radio" name="Reparado" value="1">Si<input type="radio" name="Reparado" value="0">No</td></tr>
                <tr><td>Observaciones</td><td><input type="text" size="100" name="Observaciones" style="margin-bottom: 5px"></td></tr>
                <tr><td></td><td><input type="submit" style="margin-bottom: 5px"></td></tr>
            </table>
          </form>

        <?php else: ?>

              <?php
                  $connection = new mysqli("localhost", "root", "solidwork", "talleresfaber");
                  if ($connection->connect_errno) {
                      printf("Connection failed: %s\n", $connection->connect_error);
                      exit();
                  }
                  $q="INSERT INTO Reparaciones VALUES (Null,'".$_POST["Matricula"]."','".$_POST["FechaIn"]."','".$_POST["Km"]."','".$_POST["Averia"]."','".$_POST["FechaOut"]."','".$_POST["Reparado"]."','".$_POST["Observaciones"]."')";

                  $result=$connection->query($q);

                  if (!$result) {
                      echo ERROR;
                  }
                  header("Location: reparaciones.php");
              ?>
        <?php endif ?>
        <a href="reparaciones.php"><button type="button">Cancelar</button>
    </body>
</html>
