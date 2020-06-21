<?php
session_start();
$myname = $_SESSION['myname'];
session_unset();
session_destroy();
echo "session destroyed";
?>
<html>
<head><title>session</title></head>
<body><br>
<a href="mypage.php">homepage of mypage.com</a>
</body>
</html>
