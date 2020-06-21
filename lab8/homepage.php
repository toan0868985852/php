<?php
$logcookie = $_COOKIE['logname'];

echo <<<END
   <html>
<head>
    <title>
        validate
    </title>
</head>
<body>
welcome $logcookie;
<br>
<a href="php/logout.php">logout</a>
<center>
    <h3>shopper's paradise</h3>
    <h5>shop till you drop</h5>
    <hr>
    <br>
    <table>
        <tr align="center">
            <td><a href="conf.php">confestionery</a></td>
        </tr>
        <tr align="center">
            <td><a href="flowers.php">flowers</a></td>
        </tr>
        <tr align="center">
            <td><a href="access.php">Accessories</a></td>
        </tr>
        <tr align="center">
            <td><a href="perf.php">perfumes</a></td>
        </tr>
        <tr align="center">
            <td><a href="appared.php">apparel</a></td>
        </tr>
    </table>
</center>
</body>
</html>

END;
?>
