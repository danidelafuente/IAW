<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if (!isset($_POST["idrecambio"])) : ?>

        <h3 style="margin-bottom: 10px">Asignar Piezas</h3>
        <form method="post" action="#">
          <table>

            <?php
               $connection = new mysqli("localhost", "root", "solidwork", "talleresfaber");
               if ($connection->connect_error) {
                   printf("Connection failed: %s\n", $mysqli->connect_error);
                   exit();
               }

               $result=$connection->query('SELECT * FROM RECAMBIOS');

               echo "<tr><td>Nombre Pieza</td><td><select name='idrecambio'>";

               while($obj=$result->fetch_object()){
                 echo "<option value='".$obj->IdRecambio."'>".$obj->Descripcion."</option>";
             }

             echo "</td></tr>";

             $idrep=$_GET['id'];

             echo "<tr><td>Número de Piezas</td><td><input type='number' name='piezas' required></td></tr>";
             echo "<input type='hidden' name='id' value=$idrep>"

             ?>

             <tr><td><input type="submit" id='asigp' value="Enviar"></td></tr>
           </table>
           </form>

         <?php else: ?>

           <?php

           $idrecambio=$_POST['idrecambio'];
           $piezas=$_POST['piezas'];
           $idrep=$_POST['id'];

           $connection = new mysqli("localhost", "root", "solidwork", "talleresfaber");
           if ($connection->connect_error) {
             printf("Connection failed: %s\n", $mysqli->connect_error);
             exit();
           }

           if($connection->query("INSERT INTO INCLUYEN VALUES('$idrecambio','$idrep','$piezas')")){
             header('Location: reparaciones.php');
           }else{
             $connection->query("UPDATE  INCLUYEN SET IdRecambio='$idrecambio',IdReparacion=$idrep,Unidades=Unidades+$piezas where IdRecambio='$idrecambio'");
             header('Location: reparaciones.php');
           }

           ?>
         <?php endif ?>
  </body>
</html>
