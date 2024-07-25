<?php
// Include -> Esta sentencia incluye y evalúa el archivo especificado
include "header.php";
echo "<br>";


echo "Hello, World!<br>";
// Las comillas dobles muestan variable, caracteres y

// La funcion nl2br(tuCadena) permite el salto de linea en HTML.


// Ejemplo 1 -> echo sin nl2br
echo "Ejemplo del salto de line con el codigo de escape \\n no se ejeccuta sin el nl2br \n";
echo "Aquí otro texto<br>";


// Ejemplo 2 -> echo con nl2br
echo nl2br("Este es un ejemplo de un texto donde si se aplica el salto de líne con \\n \n Aquí otro texto");


// Ejemplo 3 -> Comillas simples dentro de comillas simple
$variable="contenido";

echo nl2br('<br>El \'$variable puede tener un texto \' que no muestra, sino su identificador');


// Ejemplo 4 -> Comillas Dobles mostrando el valor de la variable

echo nl2br("\n El '$variable puede tener un texto ' que si muestra, utilizando comillas \"");


// Ejemplo 5 -> El código html se muestra tanto en comillas dobles ("") como en comillas simple ('')

echo '<br>El párrafo tiene <strong>tiene muchas líneas</strong> en el código HTML';

/*
 * Resumen.
 * Código de escape.
 * \n -> Salto de línea.
 * \" -> Muestra la comilla doble dentro de un string comenzado con comillas dobles (").
 * \\ -> Muestra la barra (\).
*/
?>