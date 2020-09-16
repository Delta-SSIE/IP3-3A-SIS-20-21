<?php


function kolikDni($mesic)
{
    switch ($mesic) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            return 31;

        case 2:
            return 28;

        case 4:
        case 6:
        case 9:
        case 11:
            return 30;

    }
}

//echo kolikDni(1);7
echo "<ul>";
for ($m = 1; $m < 13; $m++) {
    echo "<li>$m. měsíc má " . kolikDni($m) . " dní.</li>";
}
echo "</ul>";