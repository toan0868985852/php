<?php
$connect = mysqli_connect('localhost','root','','publication');



$result = mysqli_query($connect, 'select * from customers');
$rows = $result->num_rows;
echo "the table contains $rows rows.<br>";
mysqli_close($connect);
echo "the connection to the database has been closed";

