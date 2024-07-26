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

// Establecer la configuración regional de España.
setlocale(LC_TIME,"es_ES.UTF-8");

// Mostrar la fecha actual con un nuevo formato
echo "<br>";
salto();
echo strftime("%A, %d, de %B del %Y"); //Pendiente


//Construir una fecha desde datos del usuario, por ejemplo
echo "<br>";
salto();
$dia="25";
$mes="04";
$anio="2023";
$fecha=mktime(null,null,null,$dia,$mes,$anio);
echo date("d-m-Y",$fecha);


// Ejemplo de calcular los dias que faltan desde la fecha actual hasta la fecha fin.
echo "<br>";
salto();
$hoy=date_create(date("m/d/Y"));

// Otra fecha distinta
$finAnio=date_create("12/31/2024");
$diferencia = date_diff($hoy,$finAnio);
$diasFaltan=$diferencia->format("%a");
echo "Faltan $diasFaltan días para fin de año";

echo "<br>";
salto();
$inicioAnio=date_create("01/01/2024");
$diasTranscurrido=$diferencia->format("%R%a dias");
echo "Total de días transcurridos -> $diasTranscurrido";

//Calcular fecha de nacimiento
$nacimiento=date_create("07/11/2001");
$diferencia=date_diff($hoy,$nacimiento);
$edad=$diferencia->format("%y años vivídos");
echo "<br>";
salto();
echo "Andrés tiene $edad";

