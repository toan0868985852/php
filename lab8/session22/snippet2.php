<html>
<body>
<?php
$to = "recprint1@gmailcom, toan@gmail.com, huy@gmail.com";
$from = "yourname@example.com";
for ($i = 0; $i<count($to); $i++)
{
    $to[$i] = trim($to[$i]);
    $subject = "an example";
    $body = "this is an examle for showing the of the mail() function";
    $send = mail($to, $subject, $body, $form);
    if ($send)
    {
        echo "mail was sent to all the address!!";
    }
}
?>
</body>
</html>
