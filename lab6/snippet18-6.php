<?php
$hn = "localhost";
$un = "root";
$pw = "";
//$db = "publication";
$connect_mysql = mysqli_connect($hn, $un, $pw, "publication");
if ($connect_mysql){
    echo "connection established<br>";
}else{
    die("unable to connect<br>");
}
$mysql_db = mysqli_select_db($connect_mysql,"publication");
if ($mysql_db){
    echo "connected to the database<br>";
}else{
    die("unable to connect to the database<br>");
}
$sql_table = "create table user_contact("."user_id int not null primary key,
"."user_name char(25) not null, "." user_email_id char(25)".")";

if (mysqli_query($connect_mysql, $sql_table)){
    echo "table is created<br>";
}else{
    die("unable to create the table<br>");
}