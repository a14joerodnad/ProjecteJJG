<!DOCTYPE html>
<html>
<head>
  <title>Formulario</title>
  <style type="text/css">
  h1 { text-align: center; }
  td { padding: 0.2em 2em ; }
  </style>

</head>
    <body>
    <h1>Formulario.</h1>
        <form action="comprobar.php" method="post"/>

            <p>Nombre:</p> <input type="text" name="nombre"/>
            <p> Apellidos:</p> <input type="text" name="apellidos" size="40"/>
            <p>e-mail:</p> <input type="text" name="email" size="35"/>

            <p>
                <input type="submit" value="Comprobar el formulario">
                <input type="reset" value="borrar todo">
            </p>
        </form>

        <?php
            echo "Nombre: "; echo $_POST['nombre']; echo "<br/>";
            echo "apellidos: "; echo $_POST['apellidos']; echo "<br/>";
            echo "E-mail: "; echo $_POST['email']; echo "<br/>";
        ?>
        <a href="gracias.php">
            <input type="button" value="Enviar">
        </a>
    </body>
</html>
