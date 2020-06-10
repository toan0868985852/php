<?php
$a = $_GET['name'];
if ($a > 60){
    echo "congrats!";
    echo "you have got grade 1.";
}elseif($a < 60 AND $a > 40){
    echo "congrats!";
    echo "you have got Grade 2.";
}else{
    echo "sorry you have failed";
}
