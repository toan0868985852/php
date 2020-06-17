<html>
<body>
<?php
$hn = "localhost";
$un = "root";
$pw = "";
$connect_mysql = mysqli_connect($hn, $un, $pw);
if ($connect_mysql){
    echo "connecttion estableshed";
}
$mysql_db = mysqli_select_db($connect_mysql, "publication");
if ($mysql_db){
    echo "<br> connected to the database<br>";
}
    echo "<table>";
    echo "<tr><th>name</th><th>isbn</th>";
    echo "<dbquery q>select * from customers";
    echo "<dbrow><tr><td><? q.name</td><td><? q.isbm</td></tr>";
    echo "</dbquery>";
    echo "</tr>";
    echo "</table>";
?>
</body>
</html>
