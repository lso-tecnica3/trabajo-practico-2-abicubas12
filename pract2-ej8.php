<?php

$meses = ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
$temperaturasAltas = [30.4, 29, 26.8, 23.4, 19.3, 16.6, 16, 17.7, 19.6, 23.1, 26.1, 28.5];
$temperaturasBajas = [20.2, 19.5, 18, 15, 10.5, 8.3, 7.7, 7.8, 10.6, 13.5, 16, 18.2];


$altas = [];
$bajas = [];

$totalMeses = 12;
for ($i = 0; $i < $totalMeses; $i++) {
    $altas[$meses[$i]] = $temperaturasAltas[$i];
    $bajas[$meses[$i]] = $temperaturasBajas[$i];
}


$sumaAltas = 0;
$sumaBajas = 0;
foreach ($altas as $temp) {
    $sumaAltas += $temp;
}
foreach ($bajas as $temp) {
    $sumaBajas += $temp;
}
$promedioAltas = $sumaAltas / $totalMeses;
$promedioBajas = $sumaBajas / $totalMeses;


$maxTemp = $altas[$meses[0]];
$minTemp = $bajas[$meses[0]];
$mesMax = $meses[0];
$mesMin = $meses[0];

for ($i = 1; $i < $totalMeses; $i++) {
    if ($altas[$meses[$i]] > $maxTemp) {
        $maxTemp = $altas[$meses[$i]];
        $mesMax = $meses[$i];
    }
    if ($bajas[$meses[$i]] < $minTemp) {
        $minTemp = $bajas[$meses[$i]];
        $mesMin = $meses[$i];
    }
}


print "Promedio de temperaturas altas: " . $promedioAltas . "°C<br>";
print "Promedio de temperaturas bajas: " . $promedioBajas . "°C<br>";
print "Temperatura más alta: " . $maxTemp . "°C en " . $mesMax . "<br>";
print "Temperatura más baja: " . $minTemp . "°C en " . $mesMin . "<br>";

?>
