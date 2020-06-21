<?php
$val1 = $_GET['logname'];
$val2 = $_GET['pass'];
setcookie("logname", $val1);
if ($val1=="")
{
    echo <<<END
        please enter the name
        <html>
        <head>
            <title>
             validate
            </title>
        </head>
        <body>
        <a href="snippet20-1-php.php">back</a>
        </body>
        </html>
END;

}else if ($val2=="")
{
    echo <<<END
        please enter the password
        <html>
        <head>
            <title>
             validate
            </title>
        </head>
        <body>
        <a href="snippet20-1-php.php">back</a>
        </body>
        </html>
END;
}else{
    header("location: homepage.php");
}
?>

