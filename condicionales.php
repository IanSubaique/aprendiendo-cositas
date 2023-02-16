<?php

    $hora = 22;
    if($hora > 6 && $hora < 12){
        echo "<h1>Buenas dias</h1>";
    }
    else if($hora > 12 && $hora < 18){
        echo "<h1>Buenas tardes</h1>";
    }
    else{
        echo "<h1>Buenas noches</h1>";
    }

?>