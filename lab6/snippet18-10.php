<?php

$hn = "localhost";
$un = "root";
$pw = "";
$connect_mysql = mysqli_connect($hn, $un, $pw);
if ($connect_mysql) {
    echo "connecttion established<br>";
} else {
    die("unable to database<br>");
}
$mysql_db = mysqli_select_db($connect_mysql, "publication");
if ($mysql_db) {
    echo "connected to the database<br>";
} else {
    die("unable to connect to the database<br>");
}
$sql_delete = ("update classics set year = 1857 where author = 'Billian Shakeseare'" );

$result = mysqli_query($connect_mysql, $sql_delete);
if ($result) {
    echo "records dalete: $result<br>";
} else {
    echo "erordds not fouds in the table<br>";
    printf("Error message: %s\n", mysqli_error($connect_mysql));
}
