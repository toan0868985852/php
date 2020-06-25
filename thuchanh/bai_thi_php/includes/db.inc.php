<?php

$hn = "localhost";
$un = "root";
$pw = "";
$db = "bai_thi_php";
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("fatal error");
