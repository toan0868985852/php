<?php
$daname = 'mysql';
if (!mysqli_connect('localhost','root',''))
{
    echo 'could not connect to mysql';
    exit();
}
$sql = "SHOW TABLES FROM $daname";
$connect_mysql = mysqli_connect('localhost', 'root','');
$result = mysqli_query($connect_mysql, $sql);
if (!$result)
    $result = mysqli_query($sql);
    echo "the table from the database are: <br>";

if (!$result){
    echo "db error, unable to list table <br>";
    echo 'mysql error: ' . mysqli_error();
    exit();
}while ($row = mysqli_fetch_row($result)){
    echo "table: {$row[0]}<br>";
}
