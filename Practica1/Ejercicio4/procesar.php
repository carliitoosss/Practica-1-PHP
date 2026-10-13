<?php

    $nombre = $_POST["nombre"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificamos si el campo 'nombre' está vacío
    if (empty($nombre)) {
        echo "El campo nombre está vacío.";
    }
}
    $email = $_POST["email"];
    $edad = $_POST["edad"];

    echo $nombre . PHP_EOL;
    echo $email . PHP_EOL;
    echo $edad . PHP_EOL;


?>