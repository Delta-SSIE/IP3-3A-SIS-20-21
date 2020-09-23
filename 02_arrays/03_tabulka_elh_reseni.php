<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>tabulka ELH</title>
</head>
<body class="container">
<?php

$elh = [
    ["poradi" => "1", "mesto" => "Plzen", "zapasy" => 10, "vyhry" => 6, "prohry" => 2, "skore" => "38:24", "body" => 21 ],
    ["poradi" => "2", "mesto" => "Liberec", "zapasy" => 10, "vyhry" => 5, "prohry" => 3, "skore" => "29:22", "body" => 19 ],
    ["poradi" => "3", "mesto" => "Olomouc", "zapasy" => 9, "vyhry" => 5, "prohry" => 2, "skore" => "19:15", "body" => 19 ],
    ["poradi" => "4", "mesto" => "Brno", "zapasy" => 10, "vyhry" => 6, "prohry" => 3, "skore" => "32:29", "body" => 19 ],
    ["poradi" => "5", "mesto" => "Sparta", "zapasy" => 10, "vyhry" => 4, "prohry" => 2, "skore" => "43:37", "body" => 18 ],
    ["poradi" => "6", "mesto" => "Ml. Boleslav", "zapasy" => 9, "vyhry" => 5, "prohry" => 2, "skore" => "23:17", "body" => 17 ],
    ["poradi" => "7", "mesto" => "Hradec Kralove", "zapasy" => 10, "vyhry" => 5, "prohry" => 3, "skore" => "29:31", "body" => 17 ],
    ["poradi" => "8", "mesto" => "Chomutov", "zapasy" => 10, "vyhry" => 4, "prohry" => 4, "skore" => "19:22", "body" => 15 ],
    ["poradi" => "9", "mesto" => "Vitkovice", "zapasy" => 9, "vyhry" => 4, "prohry" => 4, "skore" => "30:25", "body" => 14 ],
    ["poradi" => "10", "mesto" => "Trinec", "zapasy" => 10, "vyhry" => 4, "prohry" => 6, "skore" => "27:26", "body" => 12 ],
    ["poradi" => "11", "mesto" => "Pardubice", "zapasy" => 9, "vyhry" => 3, "prohry" => 6, "skore" => "16:26", "body" => 9 ],
    ["poradi" => "12", "mesto" => "Litvinov", "zapasy" => 10, "vyhry" => 1, "prohry" => 6, "skore" => "22:28", "body" => 8 ],
    ["poradi" => "13", "mesto" => "Zlin", "zapasy" => 8, "vyhry" => 2, "prohry" => 5, "skore" => "14:24", "body" => 7 ],
    ["poradi" => "14", "mesto" => "Karlovy Vary", "zapasy" => 10, "vyhry" => 2, "prohry" => 8, "skore" => "21:36", "body" => 6 ],
];

/* primocare reseni */
// vsimnete si budovani vystupniho retezce, misto neustaleho "echovani"
$html = "<table class='table table-striped'>";
    $html .= "<tr>"
            . "<th>Pořadí</th>"
            . "<th>Město</th>"
            . "<th>Zápasy</th>"
            . "<th>Výhry</th>"
            . "<th>Prohry</th>"
            . "<th>Skóre</th>"
            . "<th>Body</th>"
        . "</tr>";
    foreach ($elh as $radek) {
        $html .= "<tr>"
            . "<td>". htmlspecialchars($radek['poradi']) . "</td>"
            . "<td>". htmlspecialchars($radek['mesto']) . "</td>"
            . "<td>". htmlspecialchars($radek['zapasy']) . "</td>"
            . "<td>". htmlspecialchars($radek['vyhry']) . "</td>"
            . "<td>". htmlspecialchars($radek['prohry']) . "</td>"
            . "<td>". htmlspecialchars($radek['skore']) . "</td>"
            . "<td>". htmlspecialchars($radek['body']) . "</td>"
        . "</tr>";
    }
    $html .= "</table>";

echo $html;


/* mene upovidane reseni */
// pridam pole se zahlavim

$titles = [
    "poradi" => "Pořadí",
    "mesto" => "Město",
    "zapasy" => "Zápasy",
    "vyhry" => "Výhry",
    "prohry" => "Prohry",
    "skore" => "Skóre",
    "body" => "Body"
];

$html = "<table class='table table-striped'>";

// vypis zahlavi
$html .= "<thead><tr>";
    foreach ($titles as $heading) {
        $html .= "<th>{$heading}</th>";
    }
$html .= "</tr></thead>";

$html .= "<tbody>";
foreach ($elh as $row) {
    $html .= "<tr>";
    foreach ($titles as $key => $heading) {
        $html .= "<td>{$row[$key]}</td>";
    }
    $html .= "</tr>";
}
$html .= "</tbody>";
$html .= "</table>";

echo $html;
// pozor, ani toto reseni neni dokonale, nepouziva htmlspecialchars


?>
</body>
</html>

