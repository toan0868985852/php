<?php
$x = array();
$y = array();

echo 'array()'.'<=>'.'array()'.'returns', $x <=> $y;
echo '<br>';
$m = array(1,2,3);
$n = array(1,2,3);
$p = array(1,2,1);
$q = array(1,2,4);

echo 'array(1,2,3)'.'<=>'.'array(1,2,3)'.'returns', $m <=> $n;
echo '<br>';
echo 'array(1,2,3)'.'<=>'.'array()'.'returns', $m <=> $x;
echo '<br>';
echo 'array(1,2,3)'.'<=>'.'array(1,2,4)'.'returns', $m<=> $q;
?>