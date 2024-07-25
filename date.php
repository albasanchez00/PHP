<?php
include "header.php";
salto();

function salto()
{
    echo "<br>";
}


// Día de la semana en inglés con formatos.
echo "<br>";
salto();
$timezone='Europe/Madrid';
date_default_timezone_set($timezone);
echo "$timezone";
echo "<br>";

echo "Fecha de hoy (Y) -> " . date("d-m-Y");
salto();
echo "Fecha de hoy (y) -> " . date("d-m-y");


//Date con horas
echo "<br>";
salto();
echo "Fecha y Hora actual -> " . date("d/m/Y \t H:i:s ");


// Día de la semana en inglés.
echo "<br>";
salto();
echo "Hoy es -> " . date("l"). "," . " de " .date("d") ." de ".date("F").  " de " .date("Y");


