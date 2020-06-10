<?php
$sales = 2750;
if ($sales > 2000){
    $comm = $sales * .1;
    echo "sales: $$sales <br> Commission : $$comm";
}else{
    $comm = $sales * .05;
    echo "saless: $$sales <br> commision : $$comm";
}
