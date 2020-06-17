<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
//$query = "select * from classics";
$query = "select * from customers";
$result = $conn->query($query);
if (!$result){
    die("fatal error");
}

$rew = $result->num_rows;
//for ($i = 0; $i < $rew; ++$i){
//    $row = $result->fetch_array(MYSQLI_ASSOC);
//
//    echo 'author: ' .$row['author'] . '<br>';
//    echo 'title: ' .$row['title'] . '<br>';
//    echo 'category: ' .$row['category'] . '<br>';
//    echo 'year: ' .$row['year'] . '<br>';
//    echo 'isbn: ' .$row['isbn'] . '<br>';
//}
for ($j = 0; $j < $rew; ++$j){
    $row = $result->fetch_array(MYSQLI_ASSOC);

    echo'<p>'. 'name: ' .$row['name'] . '<br>'.'</p>';
    echo'<p>'. 'isbn: ' .$row['isbn'] . '<br>'.'</p>';
}
$result->close();
$conn->close();
?>
</body>
</html>

