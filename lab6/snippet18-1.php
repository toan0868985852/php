<?php
$connect_mysql = mysqli_connect('localhost', 'root','','publication');



$mysqli_db = mysqli_select_db($connect_mysql,"publication");

if (!$mysqli_db){
    die("connection failed");
}else{
    echo "curren database is selected";
}