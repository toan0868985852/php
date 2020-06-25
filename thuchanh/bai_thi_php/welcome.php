<html>
<body>
<?php

if (isset($_SESSION['fullname']))
{
    $fullname = htmlspecialchars($_SESSION['fullname']);
    $username = htmlspecialchars($_SESSION['username']);
    echo "Fullname: $fullname Uaername: $username đã đăng nhập thành công";
}
?>

</body>
</html>