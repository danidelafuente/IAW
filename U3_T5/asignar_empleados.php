<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php if (!isset($_POST["idempleado"])) : ?>

        <h3 style="margin-bottom: 10px">Asignar empleado</h3>
        <form method="post" action="#">
          <table>

          <?php

          $connection = new mysqli("localhost", "root", "solidwork", "talleresfaber");
          if ($connection->connect_error) {
            printf("Connection failed: %s\n", $mysqli->connect_error);
            exit();
          }

          $result=$connection->query('SELECT * FROM Empleados');

          echo "<tr><td>Nombre Empleado</td><td><select name='idempleado'>";

          while($obj=$result->fetch_object()){
            echo "<option value='".$obj->CodEmpleado."'>".$obj->Nombre."</option>";
          }
          echo "</td></tr>";

          $idrep=$_GET['id'];

          echo "<tr><td>Horas</td><td><input type='number' name='horas' required></td></tr>";
          echo "<input type='hidden' name='id' value=$idrep>";

          ?>

          <tr><td><input type="submit" id='asige' value="Enviar"></td></tr>
        </table>
        </form>

      <?php else: ?>

        <?php

        $idempleado=$_POST['idempleado'];
        $horas=$_POST['horas'];
        $idrep=$_POST['id'];

        $connection = new mysqli("localhost", "root", "solidwork", "talleresfaber");
        if ($connection->connect_error) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
        }

        if($connection->query("INSERT INTO INTERVIENEN VALUES('$idempleado','$idrep','$horas')")){
          header('Location: reparaciones.php');
        }else{
          $connection->query("UPDATE  INTERVIENEN SET CodEmpleado='$idempleado',IdReparacion=$idrep,Horas=Horas+$horas where CodEmpleado='$idempleado'");
          header('Location: reparaciones.php');
        }

        ?>
      <?php endif ?>
  </body>
</html>
