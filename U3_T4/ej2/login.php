<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#login" ).dialog();
  });
  </script>
</head>
<body>
 <?php if (!isset($_POST["user"])) : ?>
<div id="login" title="LOGIN">
    <form method="post">
        <p>Usuario <input name="user"></p>
        <p>Contraseña <input name="pass" type="password"></p>
        <p><button type="submit">ENTRAR</button></p>
    </form>
</div>
    <?php else: ?>
    <?php
    if($_POST["user"] == "pepe" && $_POST["pass"] == 1234){
        header('Location: matricula.php');
    }
    else {
  echo "<script>";
  echo "$(function() { $( '#login' ).dialog(); ]);";
  echo "</script>";
        echo "<div id='login' title='LOGIN'>";
        echo "<form method='post'>";
        echo "<p style='color: red'>Error de Usuario y/o Contraseña.</p>";
        echo "<p>Usuario <input name='user'></p>";
        echo "<p>Contraseña <input name='pass' type='password'></p>";
        echo "<p><button type='submit'>ENTRAR</button></p>";
        echo "</form>";
        echo "</div>";
    }
    ?>
    <?php endif ?>
</body>
</html>