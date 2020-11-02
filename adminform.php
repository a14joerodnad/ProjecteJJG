<?php
   $user = $_GET['user'];
   $password = $_GET['password'];

   if (($user == "ausias") AND ($password == "ausias")) {
      echo "Bienvenido ".$user;
      //link a otra pagina para ver las comandas
   } else {
      echo "¡Usuario o contraseña incorrectos!";
      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
   }
?> 