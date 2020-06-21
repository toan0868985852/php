
<html>
<head>
    <title>confestionery details</title>
</head>
<body>
<?php
$logcookie = $_COOKIE['logname'];
echo <<<END
<center>
    <align='right'>
    welcom $logcookie
    <br>
    <a href="php/logout.php">logout</a>
    </align>

<h3>shopper paradise</h3>
<h5>shop till you drop!!!</h5>
<hr>
<br>
<table border="1">
    <tr align="center">
        <th>code</th>
        <th>name</th>
        <th>price</th>
    </tr>
    <tr align="center">
        <td>C001</td>
        <td><a href="">vanilla crush</a></td>
        <td>$4.00</td>
    </tr>
    <tr align="center">
        <td>C002</td>
        <td><a href="">choco chunks</a></td>
        <td>$7.00</td>
    </tr>
    <tr align="center">
        <td>C002</td>
        <td><a href="">strawberry delight</a></td>
        <td>$9.00</td>
    </tr>
</table>
</center>
END;
?>


</body>
</html>