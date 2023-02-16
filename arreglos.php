<?php

    $frutas = array("platano", "manzana", "uvas", "fresa");

    print_r($frutas);

    echo $frutas[1];

    echo "<br>";

    echo count($frutas) . " elementos";

    echo "<br>";

    for($i=0;$i<count($frutas); $i++){
        echo $frutas[$i] . "<br />";
    }

    $edades = array("Marcos" => 34, "Tania" => 23, "Omar" => 27);

    print_r($edades);

    echo "<br>";

    echo $edades['Tania'];

    echo "<br>";

    foreach($edades as $key => $value){
        echo $key . " tiene el valor de " . $value . "<br>";
    }
    echo $edades[$key];

?>