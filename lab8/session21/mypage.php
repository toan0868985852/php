<?php
session_start();
$myname = $_SESSION['myname'];
?>
<html>
<head><title>homepage</title></head>
<body>
Welcom <?php echo $myname?> to mypage.com <br>
</body>
</html>
