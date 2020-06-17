<?php
$hn = "localhost";
$un = "root";
$pw = "";
$connect_mysql = mysqli_connect($hn, $un, $pw);
if ($connect_mysql){
    echo "connection established";
}else{
    die("unable to connect");
}
$db = "publication";
$mysql_db = mysqli_select_db($connect_mysql, $db);
if ($mysql_db){
    echo "<br> connect to the database.";
}else{
    die("unable to connect to the database");
}$sql_insert = "insert into user_contact (user_id, user_name, user_email_id) values (101,'john','john@email.com')";
$result = mysqli_query($connect_mysql, $sql_insert);
if ($result)
{
    echo "<br> the records have been added to the table.";
}else{
    echo "unable to insert records.";
    mysqli_error();
}
