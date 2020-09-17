<?php
$arr = [ 4, 1, 12];

var_dump($arr);

$franta = [
    "jmeno" => "František",
    "prijmeni" => "Vomáčka",
    "vek" => 27,
    "cislo bot" => 42.5,
    "jeKurak" => false
];

var_dump($franta);

if ($franta["jeKurak"]) {
    echo "Jdi s tím smradem ven.";
} else {
    echo "Ty vydržíš dlouho";
}

$arr2 = [
    "a",
    "b",
    6 => "c",
    "d"
];

var_dump($arr2);

$arr3 = [ 5=> "Nazdar", 12=>"Ahoj"];
var_dump(count($arr3));
$arr3[] = "Čus";
var_dump($arr3);
$arr3[2] = "Dobrý den";
var_dump($arr3);

$arr4 = array("a", "b", "c", "d");
foreach ($arr4 as $key => $value) {
    echo "$key: $value<br>";
}
