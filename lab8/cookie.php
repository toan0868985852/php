<html>
<body>
<?php
$test = 'false';
if (isset($_COOKIE['test'])) $test = $_COOKIE['test'];
echo "<p><b>the value of the cookie 'test' is: $test</b></p>";
setcookie('test', 'i love cookie');

setcookie("cookie[three]", "cookiethree");
setcookie("cookie[two]", "cookietwo");
setcookie("cookie[one]", "cookieone");

if (isset($_COOKIE['cookie'])){
    foreach ($_COOKIE['cookie'] as $name => $value){
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br>\n";
    }
}
?>
</body>
</html>
