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
    <?php include 'header.php';?>
    <h1>Formulario.</h1>
        <form action="gracias.php" method="post"/>

            <p>Nombre:</p> <input type="text" name="nombre"/>
            <p>Apellidos:</p> <input type="text" name="apellidos" size="40"/>
            <p>Correo:</p> <input type="text" name="email" size="35"/>

            <p>
                <input type="submit" value="Enviar">
                <input type="reset" value="borrar todo">
            </p>
        </form>
        <?php include 'footer.php';?>
    </body>
</html>
