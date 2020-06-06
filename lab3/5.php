<?php
function decrement()
{
    static  $static_int1 = 99;
    $static_int1--;
    echo "the decrement value is $static_int1";
}
decrement();
