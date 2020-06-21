<?php

$hn = "localhost";
$un = "root";
$pw = "";
$db = "publication";
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("fatal error");
$query = "create table users3(
    forename VARCHAR(32) not null ,
    surname VARCHAR(32) not null ,
    username VARCHAR(32) not null unique ,
    password VARCHAR(255) not null 
)";

$reault = $conn->query($query);
if (!$reault) die("fatal error");

    $forename = 'toan';
    $surname = 'nguyen';
    $username = 'toan2001';
    $password = '23102001';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    add_user($conn, $forename, $surname, $username, $hash);

    $forename = 'huy';
    $surname = 'toan';
    $username = 'huytoan';
    $password = 'toan2001';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    add_user($conn, $forename, $surname, $username, $hash);


    function add_user($conn, $hn, $un, $pw, $db)
    {
        $stmt = $conn->prepare('insert into users3 values (?,?,?,?)');
        $stmt->bind_param('ssss',$hn, $un, $pw, $db);
        $stmt->execute();
        $stmt->close();
    }
