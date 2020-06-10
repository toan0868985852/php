<?php
$sal = $_GET['sal'];
echo "total sales : $";
echo $sal;
echo "<br>";
if ($sal > 50000){
    $comm = $sal * .10;
    echo "commission : $$comm";
    echo "<br>";
}else if($sal > 20000 and $sal <= 50000){
        $comm = $sal * .07;
        echo "commissin : $$comm";
        echo "<br>";

}else if($sal > 20000){
    $comm = $sal * .05;
    echo "commisson: $$comm";
    echo "<br>";
}