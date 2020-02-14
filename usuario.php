<?php

   $user = $_GET['user'];

   $password = $_GET['password'];

 //$html = file_get_contents('things.html'); //Convierte la información de la URL en cadena

 $comprador = file_get_contents('things.html');
 $admin = file_get_contents('dashboard.html');

   if (($user == "comprador") AND ($password == "comprador")) {

      echo $comprador;

   } else {
       if (($user == "admin") AND ($password == "admin")) {

      echo $admin;

   }else {

      echo "¡Usuario o contraseña incorrectos!";

      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
   }
   }
?>
