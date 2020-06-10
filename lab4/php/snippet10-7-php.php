<html>
<body>


<?php
$units = $_GET['units'];
echo "number of units consumed";
echo $units;
echo "<br>";
if ($units > 1000){
    $rate = $units * 3;
    $servite = $rate * .1;
    echo "sevire charge  added for 1000 : $$servite";
    echo"<br>";
    $totalbill = $rate + $servite;
    echo "total electricity bill : $$totalbill";
}else{
    if (($units > 500) and $units <= 1000){
        $rate = $units * 2;
        echo "total eletricity bill : $$rate";
    }else{
        $rate = $units * 2;
        echo "to electricity bill : $$rate";
    }
}
echo "<br>";
?>
<a href="../snippet/snippet10-7.php">Back</a>
</body>
</html>