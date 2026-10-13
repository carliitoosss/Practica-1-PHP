<?php
function evaluarNota ($nota) {
    if ($nota < 5) {
        return "Suspenso";
    }
    elseif ($nota >= 5 && $nota<7){
        return "Aprobado";
    }
    elseif ($nota >= 7 && $nota<9){
        return "Notable";
    }
    else{
        return "Sobresaliente";
    }
}

$alumnos = [
    "Saúl" => 9.5,
    "Paquimbawer" => 4.0,
    "Carlos" => 8.99,
    "Mario" => 6.76,
    "Alejandro" => 7.7
];

$promedioNotas = 0;

foreach ($alumnos as $key => $value) {
    echo "Nombre: " . $key . ", Nota: " . $value . "<br>";
    $promedioNotas += $value;
}
echo "<br>";

echo "Calcular Promedio de notas del grupo:" . ($promedioNotas/count($alumnos));

echo "<br>";
echo "<br>";

foreach ($alumnos as $key => $value) {
    echo "Nombre: " . $key . ", Nota: " . $value . " " . evaluarNota($value) .  "<br>";
}

?>