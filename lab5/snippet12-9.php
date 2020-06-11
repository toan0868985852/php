<?php
$counter = 0;
while ($counter < 5){
    $counter++;
    if($counter==3){
        echo "continuse the loop<br>";
        continue;
    }
    echo "$counter<br>";
}
echo "the loop ands here";