<?php

$hn = "localhost";
$un = "root";
$pw = "";
$connect_mysql = mysqli_connect($hn, $un, $pw);
if ($connect_mysql){
    echo "connection established<br>";
}else{
    die("unable to connect<br>");
}
$mysql_db = mysqli_select_db($connect_mysql, "publication");
if ($mysql_db){
    echo"connected to the database<br>";
}else{
    die("unable to connect to the database<br>");
}
$sql_disp=("select * from classics;");
echo "<br> displaying records from the classics table:<br>";
$result = mysqli_query($connect_mysql, $sql_disp);
while ($row = mysqli_fetch_array($result))
{
    echo "$row[author]";
    echo "$row[title]";
    echo "$row[category]";
    echo "$row[year]<br>";
}
