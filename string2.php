<?php
include "header.php";
salto();

//Funciones de la cadenas de caracteres
//Conocer la longitud de una cadena

$cadena="Hola Mundo, ¿Cómo estás hoy?";
echo "La cadena \"$cadena\" tiene longitud de " . strlen($cadena). "carácteres";
echo "La cadena \"$cadena\" tiene longitud de " . mb_strlen($cadena). "carácteres";


//Mostrar los primeros 12 carácteres de la cadena
echo "<br>Los primeros 12 carácteres -> '" . substr($cadena,0,12). "'";
echo "<br>Los primeros 12 carácteres -> '" . mb_substr($cadena,0,12). "'";


// Convertir la cadena en un array, le tengo que indicar el delimitado, en nuestro ejemplo ",".
$array=explode(",",$cadena);
echo "<br>";
echo "<br>";
echo $array[0];
echo "<br>";
echo $array[1];


// Remplazar una cadena por otra.
echo "<br>";
echo "<br>";
echo substr_replace($cadena,"este es el remplazo de la cadena.",12);


// Remplazar una cadena introducida por otra que introduzcamos.
echo "<br>";
echo "<br>";
echo str_replace(",", ".", $cadena);


// Mostrar la posición de la primera "o" en el texto
echo "<br>";
echo "<br>";
echo "La primera o está en la posición -> ".strpos($cadena,"o");
echo "<br>";
echo "La última o está en la posición -> ".mb_strrpos($cadena,"o");


// Cambia la primera letra de una cadena a mayúscula.
$nombre="maría perez";
echo "<br>";
echo "<br>";
echo "El nombre original es $nombre, pero con la función ucfirst cambia a -> ".ucfirst($nombre);
echo "<br>";
echo "El apellido utilizando ucfirst sería -> " . ucfirst(mb_substr($nombre,mb_strpos($nombre," ")+1));

//// Otra forma ->
/// Forma 1 ->
//echo "<br>";
//echo "El apellido utilizando ucfirst sería -> " . ucfirst(mb_substr($nombre,mb_strpos($nombre," "))) . "<br>".ucfirst(mb_substr($nombre,mb_strpos($nombre," ")+1));

/// Forma 2 ->
//echo "<br>";
//$array2=explode(" ",$nombre);
//echo "El nombre original es $nombre, pero con la función ucfirst cambia a -> ".ucfirst($array2[0] . " " . $array2[1]);


// Existe una función que pasa todas las primeras letras de todas las palabras a mayúscula,
echo "<br>";
echo "<br>";
echo "Con ucword convertimos la primera letra de cada palabra en mayúscula -> " . ucwords($nombre);


//Quitar los espacios de derecha a izquierda
echo "<br>";
$otraCadena="En un lugar de la Mancha";
echo "<br>";
echo ucfirst(trim($otraCadena));


// Convertir una cadena en minúsculas
echo "<br>";
salto();
echo mb_strtolower($cadena);


// Convertir una cadena en mayúsculas
echo "<br>";
salto();
echo mb_strtoupper($otraCadena);


// Necesitas crear una cadena encriptada MD5-> Utilizado por WordPress (hash).
$password='Mi$ifu2024!';
echo "<br>";
salto();
echo "La contraseña $password en MD5 es -> " . md5($password);
salto();
echo "La contraseña $password en sha1 es -> " . strlen(sha1($password));


// strstr -> Busca la primera aparición de una cadena dentro de otra cadena.
echo "<br>";
salto();
echo "Con strstr a partir de la primera u, muesta el resto de la cadena -> " . strstr($otraCadena,"u");
salto();
// strrchr -> Busca la última aparición de una cadena dentro de otra cadena.
echo "Con strstr a partir de la última u, muesta el resto de la cadena -> " . strrchr($otraCadena,"u");


function salto()
{
    echo "<br>";
}





