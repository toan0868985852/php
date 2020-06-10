<?php
$sal = $_GET['sal'];
echo "salary befor bonus : $";
echo $sal;
echo "<br>";
if ($sal > 850){
    $bonus = $sal * .1;
    echo "bonus : $$bonus";
    echo "<br>";
    $sal = $sal + $bonus;
    echo "total salary : $$sal";
}