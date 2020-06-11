<?php
$salary = 800;
if ($salary<6000){
    echo "basic : $salary<br>";
    echo "salary below 6000 is not entitled for HRA";
    exit();
}else{
    echo "basic : $salary<br>";
    $hra = $salary * 0.8;
    echo "HRA : $hra";
}
