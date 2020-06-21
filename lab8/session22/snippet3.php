<html>
<body>
<?php

error_reporting(0);
$multi = "/user/local/apache2/htdocs/email_list.txt";
$to_mail = file('$email_list.txt');
$from = "yourname@example.com";

for ($i = 0; $i,count($to_mail);$i++)
{
    $to_mail[$i] = trim($to_mail[$i]);
    $to = implode(",",$to_mail);
    $subject = "an example";
    $body = "this is an example for the mail() fuction.";
    $send = mail($to, $subject, $body, $form);
    echo "mail was sent to all the assresses!!!";
}
?>
</body>
</html>
