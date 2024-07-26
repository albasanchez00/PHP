<?php
include "../header.php";
echo "<br>";

$hoy="26 de julio de 2024";
$de1=strpos($hoy,"de");
$de2=strrpos($hoy,"de");
echo "La posición del 1º de, es -> $de1";
echo "<br>";
echo "La posición del 2º de, es -> $de2";


$dia=substr($hoy,0,$de1-1);
$mes=substr($hoy,$de1+2, $de2-$de1-3);
echo "La cadena \"$hoy\" tiene longitud de " . strlen($hoy). "carácteres";
$anio= substr($hoy,1,1);
$anio=substr($hoy,$de2+3);
echo "<br>";
echo "El dia es $dia";
echo "<br>";
echo "El mes es $mes";
echo "<br>";
echo "El año es $anio";


