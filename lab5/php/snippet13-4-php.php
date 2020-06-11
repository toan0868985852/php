<?php
$number = $_GET['num'];
if ($number==0){
    exit();
}
$ans = 1/$number;
echo "<br> inverse of the entered number is 1/$number";
echo "<br> ist decimal equyvalent is $ans";
echo "<br> <a href='../snippet13-4.php'>go back</a>";