<?php
$int1 = 68;
$int2 = 50;
function division()
{
    global  $int1, $int2;
    $int3 = $int1/$int2;
    echo "the quotient for $int1/$int2 = $int3";
}
division();
