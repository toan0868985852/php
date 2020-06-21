<html>
<body>
<?php
$to = "nguyenhuytoanit@gmail.com";
$form = "toan0902148285@gmail.com";
$subject = "test email";
$body = "this is an example for showing the of the mail() function";
$send = mail($to, $subject, $body, $form);
if ($send)
{
    echo "mail sent to $to address!!!";
}else{
    echo "mail coult nor be sent to $to address!!!";
}
?>
</body>
</html>
