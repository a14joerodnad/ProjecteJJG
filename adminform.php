<?php
   $user = $_GET['user'];
   $password = $_GET['password'];

   if (($user == "ausias") AND ($password == "ausias")) {
      echo "Benvingut administrador.";
      //link a otra pagina para ver las comandas
      echo "</br>";
      echo "Aqui apareixeran les comandes d'avui de la cantina de l'institut";
   } else {
      echo "¡Usuario o contraseña incorrectos!";
      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
   }
?> 