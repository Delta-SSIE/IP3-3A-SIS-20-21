<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$str = "Áhoj";
//var_dump($str[0].$str[1]);
var_dump(mb_substr($str, 0, 1));
//$str[0] = 'A';
var_dump( $str);
$str = $str . " Bobe";
var_dump( $str);
$str .= ", jak se vede"; //preferovaný způsob
var_dump( $str);

$veta = "Bob řekl: \"A to mě ani nehne. Já se s takovým 'nýmandem' vůbec nebudu bavit\"";
var_dump($veta);
$veta = 'Bob řekl: "A to mě ani nehne. Já se s takovým \'nýmandem\' vůbec nebudu bavit"';
var_dump($veta);
$veta = <<<EOD
Bob řekl: "A to mě ani nehne. Já se s takovým 'nýmandem' vůbec nebudu bavit" 
EOD;
var_dump($veta);

$him = "";
$other = "Alice";
//$him = "Bob";
$suspect = $him ?: $other ?: "anybody";


var_dump($suspect);

$her = "";
$suspect = $her ?? "nobody";

var_dump($suspect);
?>
</body>
</html>

