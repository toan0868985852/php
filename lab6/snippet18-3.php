<?php

$connect = mysqli_connect('localhost','root','','publication');
if ($result = mysqli_query($connect, 'select * from customers'))
{
    $rows = mysqli_num_rows($result);
    echo "the table contains $rows row.<br>";
}