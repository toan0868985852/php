<?php
if(isset($_POST['Register'])){

    require 'db.inc.php';

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($fullname) || empty($email) || empty($username) || empty($password)) {
        header("location: ../thuchanh.php?error=emptyfields&uid=".$fullname."&mail=".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $fullname)){
        header("location: ../thuchanh.php?error=invalidmailuid");
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location: ../thuchanh.php?error=invalidmail&uid=".$fullname);
        exit();
    }
                $query = "SELECT * FROM register WHERE email='" . $email . "'";
                $emailCheck = mysqli_query($conn, $query);
                if (mysqli_fetch_assoc($emailCheck)) {
                    header("location: ../thuchanh.php?error=emailtaken");
                    exit();
                } else {

                    $sql = "INSERT INTO register (fullname, email, username, password) VALUES (?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("location: ../thuchanh.php?error=sqlerror");
                        exit();
                    } else {
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($stmt, "ssss", $fullname, $email, $username, $hashedPwd);
                        mysqli_stmt_execute($stmt);

                        $test = 'false';
                        setcookie($fullname, $username);
                        echo "welcome $fullname, $username";
                    }
                }


    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("location: ../thuchanh.php");
    exit();
}
