<?php
    $contactos = [
        ["nombre"=>"Carlos", "Telefono"=>"695618190", "Email"=>"cmarpin@gmail.com"],
        ["nombre"=>"Saúl", "Telefono"=>"696014170", "Email"=>"srodvar@gmail.com"],
        ["nombre"=>"Francisco José", "Telefono"=>"698718998", "Email"=>"pnavlim@gmail.com"],
    ];
    echo $contactos[2]["nombre"]."<br>";
    foreach ($contactos as $contacto) {
        echo $contacto . PHP_EOL;
    }
?>
