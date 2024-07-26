<?php
include "../header.php";
echo "<br>";
//Conocer la longitud de una cadena
$cadena="Bienvenido a mi página web.";
$primeraLetra= substr($cadena,0,1);
echo "La primera letra es -> <strong>'$primeraLetra'</strong>";
echo "<br>";
$ultimaLetra= substr($cadena,strlen($primeraLetra)-3,1);
echo "La última letra es -> <strong>'$ultimaLetra'</strong>";




