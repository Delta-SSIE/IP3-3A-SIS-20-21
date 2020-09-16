<?php

$a = [1,2,3];
$b = [1,2];

var_dump($a == $b);

$c = [1,2,"3"];
var_dump($a == $c);
var_dump($a === $c);

$d = [4,3,1];

var_dump($a + $b);
var_dump($a + $d);



