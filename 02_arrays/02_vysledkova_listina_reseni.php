<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Výsledková listina</title>
</head>
<body>



<?php

// 1 Obyčejné pole
// 1.1 Vypište výsledkovou listinu s pořadím a jménem vítěze jako číslovaný seznam

$vitezove = [
    "Petr Vincena",
    "Markéta Calábková",
    "Marian Poljak",
    "Martin Kubeša",
    "Jan Šuta",
    "Jan Gocník",
    "Tomáš Kremel",
];

echo "<ol>";
foreach ($vitezove as $vitez) {
    echo "<li>".htmlspecialchars($vitez)."</li>";
}
echo "</ol>";

// 1.2 Upravte řešení tak, aby listina byla implementována jako tabulka

$poradi = 1;
echo "<table>";
foreach ($vitezove as $vitez) {
    echo "<tr>"
        . "<td>$poradi</td>"
        . "<td>".htmlspecialchars($vitez)."</td>"
        . "</tr>";
    $poradi++;
}
echo "</table>";

// 1.3 Upravte řešení tak, aby sudé řádky byly podbarveny šedou barvou
$poradi = 1;
echo "<table>";
foreach ($vitezove as $vitez) {
    $bgcolor = ($poradi % 2 === 0) ? "#d0d0d0" : "transparent";
    echo "<tr style='background-color: $bgcolor'>"
        . "<td>$poradi</td>"
        . "<td>".htmlspecialchars($vitez)."</td>"
        . "</tr>";
    $poradi++;
}
echo "</table>";
// 1.4 Navrhněte změnu deklarace pole tak, aby se mohli dva hráči shodně umístit na 2.-3. místě
// ??? nechám na vás ;)
//
 ?>

</body>
</html>
