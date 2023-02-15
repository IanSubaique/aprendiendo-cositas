<?php

$cadena = "No me gusta el lol";

//longitud
echo strlen($cadena);
echo "<br>";    //otro ej de salto de linea

//numero de palabras
echo str_word_count($cadena);
echo "<br>";

//reversa
echo strrev($cadena);
echo "<br>";

//encuentra texto
echo strpos($cadena, "lol"); //cuenta desde 0
echo "<br>";

//reemplazar texto
echo str_replace("No", "Si", $cadena);
echo "<br>";

//todo a minusculas
echo strtolower($cadena);
echo "<br>";

//todo a mayusculas
echo strtoupper($cadena);
echo "<br>";

//comparar cadenas
echo strcmp("abc", "abc");
echo "<br>";

//substraer cadena
echo substr($cadena, 3);
echo "<br>";

//remover espacios en blanco
echo trim("            jkdsnajdnasjd dknskadf sadjk naskdask   d kas noooo     ");
echo "<br>";

?>