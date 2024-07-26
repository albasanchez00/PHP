<?php
/**/
include "../header.php";
echo "<br>";
$hoy = date("d-m-Y");
echo "Hoy es $hoy";
//Calcular la fecha de ayer
$ayer = date("d-m-Y", strtotime("-1 day"));
echo "<br>";
echo "<br>";
echo "Ayer fue $ayer";
$manana = date("d-m-Y", strtotime("+1 day"));
echo "<br>";
echo "<br>";
echo "Manana será $manana";
$mesUnMes= date("d-m-Y", strtotime("+1 month"));
echo "<br>";
echo "<br>";
echo "Dentro de un mes será $mesUnMes";
$cincoAnios= date("d-m-Y", strtotime("+5 year"));
echo "<br>";
echo "<br>";
echo "Dentro de 5 años será $cincoAnios";
