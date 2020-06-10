
<?php
//snippet2

function test1($x){
    echo 'float $x = '.$x;
}
test1(true);
echo "<br>";
//snippet3

function test(bool $a){
    echo $a;
}
test(10.1234);
echo "<br>";
//snippet4
function test2(string $b){
    echo $b;
}
test2(10.1234);