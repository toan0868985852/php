<html>
<body>
<style>
    form{
        text-align: center;
    }
</style>
<h1 style="text-align: center; margin-top: 50px">Register Members</h1>
<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyfields") {
        echo '<p class="signuperror">Điền vào tất cả các lĩnh vực!</p>';
    } elseif ($_GET['error'] == "invalidmailuid") {
        echo '<p class="signuperror">Tên người dùng và e-mail không hợp lệ!</p>';
    } elseif ($_GET['error'] == "invalidmail") {
        echo '<p class="signuperror">E-mail không hợp lệ!</p>';
    } elseif ($_GET['error'] == "invaliduid") {
        echo '<p class="signuperror">Tên người dùng không hợp lệ!</p>';
    }
}
?>
<form action="includes/register.inc.php" method="post">
    <pre>
Fullname
<input type="text" name="fullname"><br>

Email
<input type="text" name="email"><br>

Username
<input type="text" name="username"><br>

Password
<input type="password" name="password"><br>
<input type="submit" name="Register">
    </pre>
</form>
</body>
</html>
