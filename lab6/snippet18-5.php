<?php
$connect = mysqli_connect('localhost','root','','publication');

$result = mysqli_query($connect, "select * from customers");
while ($row = mysqli_fetch_row($result)){
    printf("%s (%s)\n", $row[0],  $row[1]);
}
