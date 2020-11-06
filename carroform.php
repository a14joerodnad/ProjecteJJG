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
    <h2>Introdueix les teves dades</h2>
        <form action="gracias.php" method="post"/>

            <h5>Nombre:</h5> <input type="text" name="nom" size="25"/>
            <h5>Apellidos:</h5> <input type="text" name="cognoms" size="30"/>
            <h5>Correo:</h5> <input type="text" name="email" size="40"/>

            <p class="submitForm">
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar tot">
            </p>
        </form>
        <?php include 'footer.php';?>
    </body>
</html>
