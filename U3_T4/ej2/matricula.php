<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php if (!isset($_POST["dni"])) : ?>
    <form method="post">
        <h3 style="margin-bottom: 10px">Datos Personales</h3>
        <table>
            <tr><td>DNI</td><td><input type="text" name="dni" style="margin-bottom: 5px"></td></tr>
            <tr><td>Nombre</td><td><input type="text" size="50" name="nombre" style="margin-bottom: 5px"></td></tr>
            <tr><td>Apellidos</td><td><input type="text" size="50" name="apell" style="margin-bottom: 5px"></td></tr>
            <tr><td>Direccion</td><td><input type="text" name="dir" size="50" style="margin-bottom: 5px"></td></tr>
            <tr><td>Telefono</td><td><input type="number" size="50" name="telef" style="margin-bottom: 5px"></td></tr>
            <tr><td>Email</td><td><input type="email" size="30" name="email" style="margin-bottom: 5px"></td></tr>
        </table>
        <h3 style="margin-bottom: 10px">Curso</h3>
        <select name="curso">
            <option value="1ºASIR">1º ASIR</option>
            <option value="2ºASIR">2º ASIR</option>
        </select>
        <h3 style="margin-bottom: 10px">Asignaturas</h3>
            <input type="checkbox" name="asig[]" value="Redes">Redes</br>
            <input type="checkbox" name="asig[]" value="Sistemas">Sistemas</br>
            <input type="checkbox" name="asig[]" value="BaseDatos">Base de Datos</br>
            <input type="checkbox" name="asig[]" value="Implantacion">Implantacion</br>
            <input type="checkbox" name="asig[]" value="Seguridad">Seguridad</br>
            <input type="checkbox" name="asig[]" value="Empresa">Empresa
        <h3 style="margin-bottom: 10px">Solicita Beca</h3>
            <input type="radio" name="beca" value="Si">Si</br>
            <input type="radio" name="beca" value="No">No</br>
        <p><input type="submit" value="ENVIAR"></p>
    </form>
    <?php else: ?>
    <?php
        if (sizeof($_POST["asig"])<=0){
            echo "NINGUNA ASIGNATURA SELECCIONADA";
        }
        else {
        echo "<b>DNI:</b> ".$_POST["dni"]."</br>";
        echo "<b>Nombre:</b> ".$_POST["nombre"]."</br>";
        echo "<b>Apellidos:</b> ".$_POST["apell"]."</br>";
        echo "<b>Direccion:</b> ".$_POST["dir"]."</br>";
        echo "<b>Telefono:</b> ".$_POST["telef"]."</br>";
        echo "<b>Email:</b> ".$_POST["email"]."</br>";
        echo "<b>Curso:</b> ".$_POST["curso"]."</br>";
        echo "<b>Asignaturas:</b></br>";
        for ($i=0;$i<sizeof($_POST["asig"]);$i++){
            echo $_POST["asig"][$i]."</br>";
        }
        echo "<b>Solicita Beca:</b> ".$_POST["beca"];
        }
    ?>
    <?php endif ?>
</body>
</html>
