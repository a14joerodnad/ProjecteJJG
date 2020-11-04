<!DOCTYPE html>
<html lang="es">
   <head>
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="css/css.css">
      <link rel="icon" type="image/x-icon" href="img/favicon.ico"/>
      <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
      <link href="css/styles.css" rel="stylesheet" />
   </head>
   <body>
     <?php include 'header.php';?>
      <div id="login">
         <form action= "adminform.php" method="GET">
            <label>Usuario: </label>
            <input type="text" name="user"/><br>
            <label>Contraseña: </label>
            <input type="password" name="password"/><br><br>
            <input type="submit" value="Enviar"/>
         </form>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
      <script src="js/scripts.js"></script>
   </body>
</html>
