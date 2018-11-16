<?php
    require "connect.php";

    $email = $_POST['account'];
    $pass = $_POST['pass'];
    $image = $_POST['image'];

    if (strlen($email) > 0 && strlen($pass) > 0 && strlen($image) > 0) {
        $query = "INSERT INTO student VALUES (null, '$email', '$pass', '$image')";
        $data = mysqli_query($con, $query);
        if ($data) {
            echo "Success";
        } else {
            echo "Fail";
        }
    } else {
        echo "Null";
    }
?>
