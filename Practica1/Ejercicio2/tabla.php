<?php

    $numero = readline("Introduce un numero: ");

    echo "tabla del " . $numero . PHP_EOL;

    if ($numero < 0) {
        echo "El numero no puede ser menor que " . $numero;
    }
    elseif ($numero == 0){
        echo "tabla del 0 siempre es 0";
    }

    else{
        for ($i = 1; $i <= 10; $i++) {
            echo $numero . " x " . $i . " = " . $numero * $i . PHP_EOL;
        }
    }

?>
