<?php
$files = "/usr/local/apache2/htdocs/example.txt";

$to = "nguyenhuytoanit@gmail.com";
$form = "toan0902148285@gmail.com";
$subject = "test email";
$message = "this is an exampfunction";
$headers = "From: $form";

$semi_rend = md5(time());
$mine_boudary = "==multipart_bounday_x{$semi_rend}x";

$headers .= "\nMINE-Version: 1.0\n"."content-type: multipart/mixed";

