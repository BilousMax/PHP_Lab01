<?php
function area ($r1, $r2)
{
    if ($r1 >= $r2) {
        return "Помилка: радіус r1 повинен бути меншим за радіус r2";
    }
    $area_between = M_PI * ($r2 ** 2 - $r1 ** 2);
    return $area_between;
}
$r1 = 5;
$r2 = 10;
echo "Площа між колами: " . area ($r1, $r2);